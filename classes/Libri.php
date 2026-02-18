<?php

require_once("Database.php");

class Libri extends Database{
    public function saveLibri($titulli,$autori,$sasia_totale){
        $sql = "insert into librat(titulli,autori,sasia_totale) value('$titulli','$autori','$sasia_totale')";

        return $this->conn->query($sql);
    }

    public function index(){
        $sql = "select * from librat";
        
        return $this->conn->query($sql);
    }

    public function libratFurnizim(){
        $sql = "select MIN(id) as id,titulli,autori from librat group by titulli,autori";
        
        return $this->conn->query($sql);
    }

    public function find($id){
        $sql = "select * from librat where id='$id'";

        return $this->conn->query($sql);
    }

    public function update($id,$titulli,$autori,$sasia_totale){
        $sql = "update librat set titulli='$titulli',autori='$autori',sasia_totale='$sasia_totale' where id='$id'";

        return $this->conn->query($sql);
    }

    public function delete($id){
        $sql = "delete from librat where id='$id'";

        return $this->conn->query($sql);
    }

    public function autoret($autori){
        $sql = "select autori,SUM(sasia_totale) as total from librat where autori='$autori'";

        return $this->conn->query($sql);
    }

    public function search($search){
        $sql = "select * from librat where titulli like '$search'";

        return $this->conn->query($sql);
    }
}