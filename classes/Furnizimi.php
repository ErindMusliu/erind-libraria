<?php

require_once('classes/Database.php');

class Furnizimi extends Database{
    public function index(){
        $sql = "select f.id,f.libri_id,f.sasia_furnizimit,f.cmimi_sasi,f.data_porosise,f.data_arritjes,f.zbritje,f.created_at from furnizimet f join librat l on f.libri_id=l.id";

        return $this->conn->query($sql);
    }

    public function saveFurnizimi($libri,$sasia_furnizimit,$cmimi_sasi,$zbritje){
        $sql = "insert into furnizimet(libri_id,sasia_furnizimit,cmimi_sasi,zbritje) value('$libri','$sasia_furnizimit','$cmimi_sasi','$zbritje')";
        
        return $this->conn->query($sql);
    }

    public function dataArritjes($id){
        $data_arritjes = new DateTime();
        $dorezuar = $data_arritjes->format('Y-m-d');

        $sql = "update furnizimet set data_arritjes='$dorezuar' where id='$id'";
        
        return $this->conn->query($sql);
    }
}