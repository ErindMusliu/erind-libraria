<?php

include('Database.php');

class Nxenesi extends Database{
    public function saveNxenesi($emri,$mbiemri,$klasa,$foto){
        $sql = "insert into nxenesit(emri,mbiemri,klasa,foto) value('$emri','$mbiemri','$klasa','$foto')";

        return $this->conn->query($sql);
    }

    public function index(){
        $sql = "select * from nxenesit";

        return $this->conn->query($sql);
    }
}