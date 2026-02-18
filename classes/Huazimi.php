<?php

include('classes/Database.php');

class Huazimi extends Database{
    public function saveHuazimet($nxenesi_id,$libri_id,$afati_kthimit){
        $sql = "insert into huazimet(nxenesi_id,libri_id,afati_kthimit) value('$nxenesi_id','$libri_id','$afati_kthimit')";

        return $this->conn->query($sql);
    }

    public function index(){
        $sql = "select h.id,n.id as nxenesi_id,n.emri,n.mbiemri,n.klasa,l.titulli,l.autori,l.sasia_totale,h.data_marrjes,h.afati_kthimit,h.data_kthimit from huazimet h join librat l on h.libri_id=l.id join nxenesit n on h.nxenesi_id=n.id";

        return $this->conn->query($sql);
    }

    public function delete($id){
        $sql = "delete from huazimet where nxenesi_id='$id'";

        return $this->conn->query($sql);
    }

    public function dataKthimit($id){
        $data_arritjes = new DateTime();
        $dorezuar = $data_arritjes->format('Y-m-d');

        $sql = "update huazimet set data_kthimit='$dorezuar' where id='$id'";
        
        return $this->conn->query($sql);
    }
}