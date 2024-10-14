<?php

class Database {
    private $server = "localhost";
    private $username = "root";
    private $password = ""; //for MAMP, password="root"
    private $db_name = "the_company";

    protected $conn;

    public function __construct(){
        //connects to the database
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die("Unable to connect to database: ".$this->conn->connect_error);
        }
    }
}