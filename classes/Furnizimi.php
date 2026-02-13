<?php

require_once('classes/Database.php');

class Furnizimi extends Database{
    public function index(){
        $sql = "select * from furnizimi";

        return $this->conn->query($sql);
    }

    public function saveFurnizimi($libri,$sasia_furnizimit,$cmimi_sasi,$zbritje){
        $sql = "insert into furnizimi(libri,sasia_furnizimit,cmimi_sasi,zbritje) value('$libri','$sasia_furnizimit','$cmimi_sasi','$zbritje')";
        
        return $this->conn->query($sql);
    }
}