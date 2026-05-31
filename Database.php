<?php

class Database
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
            "localhost",
            "root",
            "",
            "project"
        );

        if ($this->conn->connect_error) {
            die("Connection Failed : " . $this->conn->connect_error);
        }
    }
}
?>