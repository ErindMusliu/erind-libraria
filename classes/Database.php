<?php

class Database{
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $db_name = "libraria_db";

    public $conn;

    public function __construct(){
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name);

        if($this->conn->connect_error){
            die("Lidhja me databaze deshtoi. Kjo eshte arsyeja: ".$this->conn->connect_error);
        }
    }
}