<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// mysqli_prepare docs -- https://www.php.net/manual/en/mysqli.prepare.php
// example for binding mult. params -- https://www.w3schools.com/php/func_mysqli_prepare.asp

require_once('Connection.php');

class RegisterModel
{
   


    /**
     * Register a new user if user has not already registered
     *
     * @param String $name User's first name
     * @param String $surname User's last name
     * @param String $email User's email address
     * @param String $password User's password
     *
     * @return String Possible error messages
     */
    public function doRegister($name, $surname, $email, $password)
    {
        // check if user already exists
        $exists = $this->isExistingUser($email);
        
        if ($exists) {
            // account already exists - sign in prompt
            return "<p class=\"text-red-500 text-sm mb-1\">Email is already registered. Please sign in.</p>";
        } else {
            $id = $this->insertUser($name, $surname, $email, $password);
            if ($id != -1) {
                // registration succeeded - start session and redirect user to homepage
                session_start();
                $_SESSION["name"] = $name;
                $_SESSION["id"] = $id;
               // echo $id;
                header("Location: index.php");
            } else {
                // registration failed - error message
                return "<p class=\"text-red-500 text-sm mb-1\">Something went wrong. Please try again later.</p>";
            }
        }
    }

    /**
     * Insert new user entry in database
     *
     * @param String $name User's first name
     * @param String $surname User's last name
     * @param String $email User's email address
     * @param String $password User's password
     *
     * @return Integer Id of inserted user, -1 in case of failure
     */
    public function insertUser($name, $surname, $email, $password)
    {

        // establish connection
        $conn = new Connection();

        // get current time in correct format
        date_default_timezone_set('UTC');
        $currDatetime = date('Y-m-d H:i:s');

        $query = "INSERT INTO Users (firstName, lastName, email, pass, dateCreated, lastLogin) VALUES (?, ?, ?, ?, ?, ?);";

        $stmt = mysqli_prepare($conn->getConn(), $query);
        // bind parameters
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $surname, $email, $password, $currDatetime, $currDatetime);

        $success = mysqli_stmt_execute($stmt);

        if ($success) {
            $res = $this->getNewUserId($conn);
        } else {
            $res = -1;
        }

        mysqli_close($conn->getConn());
        return $res;
    }


    /**
     * Check whether user with email exists in database
     *
     * @param String $email User's email address
     * @return Boolean Whether user with email is in database
     */
    public function isExistingUser($email)
    {
        $query = "SELECT id FROM Users WHERE email=?";
        $conn = new Connection();

        $stmt = mysqli_prepare($conn->getConn(), $query);

        // bind parameters
        mysqli_stmt_bind_param($stmt, "s", $email);

        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $result);
        mysqli_stmt_fetch($stmt);

        // close connection
        mysqli_close($conn->getConn());

        if (isset($result)) {
            return true;
        }
        return false;
    }

    /**
     * Return last id inserted by this connection
     * @param Connection $conn Connection object
     * @return Integer $id Last id inserted by this connection
     */
    public function getNewUserId($conn)
    {
        $query = "SELECT LAST_INSERT_ID();";
        $result = mysqli_query($conn->getConn(), $query);
        $row = $result->fetch_assoc();
        $id = $row["LAST_INSERT_ID()"];

        return $id;
    }
}
