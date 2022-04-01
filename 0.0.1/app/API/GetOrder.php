<?php

namespace Leap\API;

class GetOrder
{
    private $conn;

    public $companyId;
    public $key1;
    public $key2;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function list()
    {
        $filter = $this->listFilter();

        $sql = '
        SELECT
        	t1.BOD_Id AS orderId,
        	t1.BOD_Number AS orderNumber,
        	t1.BOD_DateAdd AS orderAddDate,
        	t1.BOD_DatePay AS orderPayDate,
        	t1.BOD_PaymentType AS orderPaymentType,
        	t1.BOD_Fees AS orderPaymentFees,
        	t1.BOD_PayPalTransactionID AS orderPayPalTransactionId,
        	t1.BOD_IsAmazonAFN AS amazonFBA,
        	t1.BOD_IsAmazonBusiness AS amazonBusiness,
        	t1.BOD_VATNumberCheck AS vatChecked,
        	t1.BOD_VIESResponse AS vies,
        	t1.BOD_ShippingPrice AS orderShippingPrice,
        	t1.BOD_Amount AS orderPrice,
        	t1.BOD_Packages AS orderPackages,

        	t2.BMP_Description AS marketplace,

        	t3.BPC_Name AS clientName,
            t3.BPC_Address1 AS clientAddress1,
            t3.BPC_Address2 AS clientAddress2,
            t3.BPC_City AS clientCity,
            t3.BPC_Province AS clientRegion,
            t3.BPC_CAP AS clientCAP,
            t3.BPC_Nation AS clientCountry,
            t3.BPC_Phone AS clientPhone,
            t3.BPC_Email AS clientEmail,
            t3.BPC_BillingName AS clientBillingName,
            t3.BPC_BillingCompany AS clientBillingCompany,
            t3.BPC_BillingAddress1 AS clientBillingAddress1,
            t3.BPC_BillingAddress2 AS clientBillingAddress2,
            t3.BPC_BillingCity AS clientBillingCity,
            t3.BPC_BillingProvince AS clientBillingRegion,
            t3.BPC_BillingCAP AS clientBillingCap,
            t3.BPC_BillingNation AS clientBillingNation,
            t3.BPC_BillingEmail AS clientBillingEmail,
            t3.BPC_VatNumber AS clientVatNumber,

            t4.BPSN_Tracking AS shippingTracking,
            t4.BPSN_Date AS shippingDate,

            t5.BCA_Name AS shippingCarrier
        FROM
        	BSP_Orders AS t1
        LEFT JOIN
        	BMP_Marketplaces AS t2 ON t1.BOD_MPM = t2.BMP_Id
        LEFT JOIN
        	BSP_Customers AS t3 ON t1.BOD_BCS = t3.BPC_Id
        LEFT JOIN
            BSP_Shippings AS t4 ON t1.BOD_Id = t4.BPSN_BOD
        LEFT JOIN 
            BSP_Carriers AS t5 ON t4.BPSN_BCA = t5.BCA_Id
        WHERE
        	' . $filter['sql'] . '
        ORDER BY
        	t1.BOD_DateAdd
        DESC';

        $query = $this->conn->prepare($sql);
        $query->execute($filter['params']);
        while($row = $query->fetch()) {

            $row['vies'] = json_decode($row['vies'], true);
            $orders[$row['orderId']] = $row;
        }

        $sql = '
        SELECT
        	t1.BOL_BOD AS orderId,
        	t1.BOL_Id AS lineId,
        	t1.BOL_Quantity AS quantity,
        	t1.BOL_SellingPrice AS sellingPrice,
        	t1.BOL_ItemName AS itemName,
        	t1.BOL_SKU AS sku,

        	t2.BOP_PaymentType AS paymentType,
        	t2.BOP_Principal AS paymentPrincipal,
        	t2.BOP_PrincipalTax AS paymentPrincipalTax,
        	t2.BOP_PrincipalFee AS paymentPrincipalFee,
        	t2.BOP_Shipping AS paymentShipping,
        	t2.BOP_ShippingTax AS paymentShippingTax,
        	t2.BOP_ShippingFee AS paymentShippingFee,
        	t2.BOP_RefundCommission AS paymentRefundCommission,

        	t4.BOS_Name AS status,

        	t5.BPR_Id AS productId,
        	t5.BPR_SupplierPrice AS productPrice,
        	t5.BPR_IVA AS productIVA,
        	t5.BPR_IsListPrice AS productsIsListPrice,
        	t5.BPR_EAN AS ean,

        	t6.BSU_Name AS supplierName,
        	t6.BSU_Prefix AS supplierPrefix,
        	t6.BSU_3PWFee AS supplier3PWFee,
        	t6.BSU_PackagingCosts AS supplier3PWPackagingCost,

        	t7.BPM_ImageUrl AS image
        FROM
        	BSP_OrderLines AS t1
        LEFT JOIN
        	BSP_OrderPayments AS t2 ON t1.BOL_Id = t2.BOP_BOL
        LEFT JOIN
        	BSP_OrderStatusHst AS t3 ON t1.BOL_Id = t3.BOSH_BOL	AND t3.BOSH_ToDate IS NULL
        LEFT JOIN
        	BSP_OrderStatus AS t4 ON t3.BOSH_BOS = t4.BOS_Id
        LEFT JOIN
        	BSP_Products AS t5 ON t1.BOL_SKU = t5.BPR_SKU
        LEFT JOIN
        	BSP_Suppliers AS t6 ON t5.BPR_BSU = t6.BSU_Id
        LEFT JOIN
        	BSP_ProductImages AS t7 ON t5.BPR_Id = t7.BPM_BPR
        WHERE
        	CAST(t1.BOL_BOD AS NVARCHAR) IN (\'' . implode('\',\'', array_keys($orders)) . '\')';

        $query = $this->conn->prepare($sql);
        $query->execute();
        while($row = $query->fetch()) {

            $orders[$row['orderId']]['lines'][$row['lineId']] = $row;
        }

        return $orders;
    }

    function listFilter()
    {
        $output = array();
        $output['sql'] = isset($output['sql']) ? $output['sql'] : false;
        $output['sql'] .= 't1.BOD_BCO = :companyId';
        $output['params']['companyId'] = $this->companyId;

        if (!$this->key1 AND !$this->key2) {

            $output['sql'] .= ' AND t1.BOD_DateAdd >= :dateFrom';
            $output['params']['dateFrom'] = date('Y-m-d', strtotime('-3 days')) . ' 00:00:00';
        }
        else {

            if ($this->isDate($this->key1)) {

                $output['sql'] .= ' AND t1.BOD_DateAdd >= :dateFrom';
                $output['params']['dateFrom'] = $this->key1 . ' 00:00:00';

                if ($this->isDate($this->key2)) {

                    $output['sql'] .= ' AND t1.BOD_DateAdd <= :dateTo';
                    $output['params']['dateTo'] = $this->key2 . ' 23:59:59';
                }
            }
            elseif ($this->isInteger($this->key1)) {

                $output['sql'] .= ' AND t1.BOD_DateAdd >= CAST(DATEADD(day, -' . $this->key1 . ', GETDATE()) AS DATE)';
            }
            elseif ($this->isKeyword($this->key1)) {

                if ($this->key1 == 'All') {

                    return;
                }

                $temp = $this->keywordToDate();
                $output['sql'] .= ' AND t1.BOD_DateAdd >= :dateFrom AND t1.BOD_DateAdd <= :dateTo';
                $output['params']['dateFrom'] = $temp['start'] . ' 00:00:00';
                $output['params']['dateTo'] = $temp['end'] . ' 23:59:59';
            }
            else {

                $output['sql'] .= ' AND t1.BOD_Number = :orderNumber';
                $output['params']['orderNumber'] = $this->key1;
            }
        }

        return $output;
    }

    function isDate($date, $format = 'Y-m-d')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    function isInteger($test)
    {
        if (!ctype_digit(strval($test))) {

            return false;
        }
        else {

            return true;
        }
    }

    function isKeyword($keyword)
    {
        $this->key1 = strtolower($this->key1);

        if (in_array($keyword, array('today', 'yesterday', 'last 7 days', 'last week', 'week to date', 'month to date', 'previous month', 'year to date', 'last year', 'all'))) {

            return true;
        }
        else {

            return false;
        }
    }

    function keywordToDate()
    {
        $this->key1 = strtolower($this->key1);

        switch ($this->key1) {

            case 'today': $start = date('Y-m-d'); break;
            case 'yesterday': $start = date('Y-m-d', strtotime('yesterday')); break;
            case 'last 7 days': $start = date('Y-m-d', strtotime('-7 days')); $end = date('Y-m-d'); break;
            case 'last week': $start = date('Y-m-d', strtotime('monday last week')); $end = date('Y-m-d', strtotime('sunday last week')); break;
            case 'week to date': $start = date('Y-m-d', strtotime('monday this week')); $end = date('Y-m-d'); break;
            case 'month to date': $start = date('Y-m-d', strtotime('first day of this month')); $end = date('Y-m-d'); break;
            case 'previous month': $start = date('Y-m-d', strtotime('first day of last month')); $end = date('Y-m-d', strtotime('last day of last month')); break;
            case 'year to date': $start = date('Y-m-d', strtotime('first day of january')); $end = date('Y-m-d'); break;
            case 'last year': $start = date('Y-m-d', strtotime('last year January 1st')); $end = date('Y-m-d', strtotime('last year December 31st')); break;
            case 'all': null; break;
        }

        return array('start' => $start, 'end' => $end);
    }
}