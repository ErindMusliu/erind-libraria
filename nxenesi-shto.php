<?php

include('classes/Nxenesi.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $error = [];

    // Foto

    if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0){
        $file_name = $_FILES['foto']['name'];
        $file_size = $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        $file_type = $_FILES['foto']['type'];

        $extensions = ['png','jpg','jpeg'];
        $file_ext = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
        $new_file = uniqid("profile",true).".".$file_ext;

        if(!move_uploaded_file($file_tmp,"image/" . $new_file)){
            die("Gabim gjate ruajtjes se image");
        }
    }

    else{
        $error[] = "Ju lutem futeni nje foto tuajen!";
    }

    // Emri

    if(isset($_POST['emri']) && !empty($_POST['emri'])){
        $emri = htmlspecialchars(strip_tags(trim($_POST['emri'])));
        if(mb_strlen($emri) < 3){
            $error[] = "Emri duhet te kete se paku 3 karaktere";
        }
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Emri-t";
    }

    // Mbiemri

    if(isset($_POST['mbiemri']) && !empty($_POST['mbiemri'])){
        $mbiemri = htmlspecialchars(strip_tags(trim($_POST['mbiemri'])));

        if(mb_strlen($mbiemri) < 3){
            $error[] = "Mbiemri duhet te kete se paku 3 karaktere";
        }
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Mbiemri-t";
    }

    // Klasa

    if(isset($_POST['klasa']) && !empty($_POST['klasa'])){
        $klasa = htmlspecialchars(strip_tags(trim($_POST['klasa'])));

        if(mb_strlen($klasa) < 3){
            $error[] = "Klasa duhet te kete 3 karaktere";
        }
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Klases";
    }

    if(count($error) > 0){
        foreach($error as $e){
            echo $e."<br>";
        }
    }

    else{
        $nxenesi = new Nxenesi();
        $nxenesi->saveNxenesi($emri,$mbiemri,$klasa,$new_file);
    }
}