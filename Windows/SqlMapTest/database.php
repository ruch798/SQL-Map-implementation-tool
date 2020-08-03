<?php
class Database {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct(){
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "sqlmaptest";
        $this->connectDB();
    }

    public function connectDB(){
        $this->connection = new mysqli($this->host , $this->username , $this->password);
        if ($this->connection->errno) {
            die("Connection Failed : ". $this->connection->connect_error);
        }
        $db_selected = $this->connection->select_db($this->database);
        if (!$db_selected) {
            echo 'No Database selected';
        } else{
        //    echo 'Database selected';
        }

        return $this->connection;
    }

    // 3:39pm 12/3/2018
    public function getConnection(){
        return $this->connection;
    }
}

$database = new Database();