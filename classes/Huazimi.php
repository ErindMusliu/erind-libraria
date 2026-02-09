<?php

include('classes/Database.php');

class Huazimi extends Database{
    public function saveHuazimet($nxenesi_id,$libri_id,$data_marrjes,$afati_kthimit,$data_kthimit){
        $sql = "insert into huazimet(nxenesi_id,libri_id,data_marrjes,afati_kthimit,data_kthimit) value('$nxenesi_id','$libri_id','$data_marrjes','$afati_kthimit','$data_kthimit')";

        return $this->conn->query($sql);
    }
}