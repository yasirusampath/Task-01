<?php


class DBConnection
{
    private $host = "127.0.0.1";
    private $userName = "root";
    private $password = "ijse";
    private $database = "employeedb";
    private $port = "3306";

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->userName, $this->password, $this->database, $this->port);
        if ($this->connection->connect_errno){
            echo $this->connection->connect_error;
            die();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }


}