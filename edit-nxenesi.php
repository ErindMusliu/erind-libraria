<?php

include('classes/Nxenesi.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $error = [];

    if(isset($_POST['emri']) && !empty($_POST['emri'])){
        $emri = htmlspecialchars(strip_tags(trim($_POST['emri'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Emri-t";
    }

    if(isset($_POST['mbiemri']) && !empty($_POST['mbiemri'])){
        $mbiemri = htmlspecialchars(strip_tags(trim($_POST['mbiemri'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Mbiemri-t";
    }

    if(isset($_POST['klasa']) && !empty($_POST['klasa'])){
        $klasa = htmlspecialchars(strip_tags(trim($_POST['klasa'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Klasa-t";
    }

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

    if(count($error) > 0){
        foreach($error as $e){
            echo $e."<br>";
        }
    }

    else{
        $id = $_POST['id'];
        $nxenesi = new Nxenesi();
        $nxenesi->update($id,$emri,$mbiemri,$klasa,$new_file);
        header("Location:nxenesi.php");
    }
}