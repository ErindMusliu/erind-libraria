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

    public function find($id){
        $sql = "select * from nxenesit where id='$id'";

        return $this->conn->query($sql);
    }

    public function update($id,$emri,$mbiemri,$foto){
        $sql = "update nxenesit set emri='$emri',mbiemri='$mbiemri',foto='$foto' where id='$id'";

        return $this->conn->query($sql);
    }
}