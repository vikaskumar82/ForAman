<?php

class Connection
{
    private $conn;

    public function __construct()
    {
        //read config.ini file into an associative array
        //$dbParams = parse_ini_file("config.ini");
        
        $this->conn = mysqli_connect("localhost:3306", "root", "", "sevilledental") or die("server error");
    }

    public function getConn()
    {
        return $this->conn;
    }
}
