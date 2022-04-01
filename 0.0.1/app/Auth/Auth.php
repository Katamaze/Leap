<?php

namespace Leap\Auth;

use Leap\Database\Connection;

class Auth
{
    private $conn;

    public function __construct(Connection $conn)
    {
        $this->conn = $conn->getConnection();
    }

    function select($email)
    {

        $query = '
        SELECT
        	*
        FROM
        	tblaccounts
        WHERE
            email = :email
        LIMIT 1';

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row;
    }

    function user()
    {
        /**
         * Retreive the currently authenticated user
         */
    }

    function check()
    {
        /**
         * Determining if the current user is authenticated
         */
        return 'yeah';
    }

    function route()
    {
        /**
         * Protecting routes
         */
    }

    function redirectTo()
    {
        /**
         * Where the user should b redirected to
         */
    }

    function throttling()
    {
        /**
         * Rate limiting login attempts
         */
    }

    function login()
    {
        /**
         * Log in the user
         */
    }

    function attempt()
    {
        /**
         * Extra conditions for authentication
         */
    }

    function rememberMe()
    {
        /**
         * Keep user authenticated
         */
    }

    function logout()
    {
        /**
         * Log the user out
         */
    }

    function logoutOtherDevices()
    {
        /**
         * Invalidate sessions on other devices
         */
    }

    function sensitiveArea()
    {
        /**
         * Password confirmation before the user is redirected to a senstive area
         */
    }

    function confirmPassword()
    {
        /**
         * Confirming password to access sensitive area
         */
    }

    function watchdog()
    {
        /**
         * Further security measures
         */
    }

    function events()
    {
        /**
         * Event listener
         */
    }
}
