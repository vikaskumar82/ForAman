<?php

// mysqli_prepare docs -- https://www.php.net/manual/en/mysqli.prepare.php
// example for binding mult. params -- https://www.w3schools.com/php/func_mysqli_prepare.asp

require_once('Connection.php');

class LoginModel
{
    public function __construct()
    {
    }

    /**
     * Log user in given valid credentials
     *
     * @param String $email User's email
     * @param String $password User's password
     *
     * @return String possible error message
     */
    public function doLogin($email, $password)
    {
        return $this->canLogin($email, $password);
    }


    /**
     * Check whether user can log in with given credentials
     *
     * @param String $email User's email
     * @param String $password User's password
     *
     * @return Boolean Whether credentials are valid
     */
    public function canLogin($email, $password)
    {
        $query = "SELECT id, firstName FROM Users WHERE email=? AND pass=?";
        $conn = new Connection();

        $stmt = mysqli_prepare($conn->getConn(), $query);

        // bind parameters
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);

        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $id, $name);
        mysqli_stmt_fetch($stmt);

        mysqli_close($conn->getConn());

        // if user is found
        if (isset($id)) {
            // start session
            session_start();
            $_SESSION["id"] = $id;
            $_SESSION["user"] = $name;

            $this->updateLastLogin($id);
            return true;
        }
            
        return false;
    }


    /**
     * Update user's lastLogin field to current datetime
     *
     * @param Integer $id User's id
     */
    public function updateLastLogin($id)
    {

        // establish connection
        $conn = new Connection();

        // get current time in correct format
        date_default_timezone_set('UTC');
        $currDatetime = date('Y-m-d H:i:s');

        $query = "UPDATE Users SET lastLogin=? where id=?";
        $stmt = mysqli_prepare($conn->getConn(), $query);

        // bind parameters
        mysqli_stmt_bind_param($stmt, "ss", $currDatetime, $id);

        mysqli_stmt_execute($stmt);

        mysqli_close($conn->getConn());
    }
}
