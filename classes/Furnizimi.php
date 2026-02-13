<?php

require_once('classes/Database.php');

class Furnizimi extends Database{
    public function index(){
        $sql = "select * from furnizimi";

        return $this->conn->query($sql);
    }

    public function saveFurnizimi($libri,$sasia_furnizimit,$cmimi_sasi,$data_porosise,$zbritje){
        $sql = "insert into furnizimi(libri,sasia_furnizimit,cmimi_sasi,data_porosise,zbritje) value('$libri','$sasia_furnizimit','$cmimi_sasi','$data_porosise','$zbritje')";
        
        return $this->conn->query($sql);
    }
}