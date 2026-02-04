<?php

include('Database.php');

class Nxenesi extends Database{
    public function saveNxenesi($emri,$mbiemri,$klasa){
        $sql = "insert into nxenesit(emri,mbiemri,klasa) value('$emri','$mbiemri','$klasa')";

        return $this->conn->query($sql);
    }
}