<?php

require_once('classes/Huazimi.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $error = [];

    if(isset($_POST['nxenesi_id']) && !empty($_POST['nxenesi_id'])){
        $nxenesi_id = htmlspecialchars(strip_tags(trim($_POST['nxenesi_id'])));
    }

    else{
        $error[] = "Selekto nxenesin";
    }

    if(isset($_POST['afati-i-kthimit']) && !empty($_POST['afati-i-kthimit'])){
        $afati_i_kthimit = htmlspecialchars(strip_tags(trim($_POST['afati-i-kthimit'])));
    }

    else{
        $error[] = "Zgjedh afatin e kthtimit";
    }

    if(count($error) > 0){
        foreach($error as $e){
            echo $e."<br>";
        }
    }

    else{
        $libri_id = $_POST['id'];
        $huazimi = new Huazimi();
        $huazimi->saveHuazimet($nxenesi_id,$libri_id,$afati_i_kthimit);
        header("Location:librat.php");
    }
}