<?php

namespace Leap\Database;

class Connection {

    private $host = '';
    private $db_name = '';
    private $username = '';
    private $password = '';
    private $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {

            /* MSSQL */
            //$this->conn = new PDO("sqlsrv:Server=" . $this->host . ";Database=" . $this->db_name, $this->username, $this->password);
            /* MySQL */
            $this->conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ';charset=utf8', $this->username, $this->password);

            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(\PDO::ATTR_PERSISTENT, true);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }
        catch(PDOException $exception) {

            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}