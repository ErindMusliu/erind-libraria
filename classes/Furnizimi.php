<?php

require_once('classes/Database.php');

class Furnizimi extends Database{
    public function index(){
        $sql = "select * from furnizimi";

        return $this->conn->query($sql);
    }
}