<?php

require_once('classes/Libri.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $error = [];

    if(isset($_POST['titulli']) && !empty($_POST['titulli'])){
        $titulli = htmlspecialchars(strip_tags(trim($_POST['titulli'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Titullit";
    }

    if(isset($_POST['autori']) && !empty($_POST['autori'])){
        $autori = htmlspecialchars(strip_tags(trim($_POST['autori'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Autorit";
    }

    if(isset($_POST['sasia']) && !empty($_POST['sasia'])){
        $sasia = htmlspecialchars(strip_tags(trim($_POST['sasia'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Sasise";
    }

    if(count($error) > 0){
        foreach($error as $e){
            echo $e."<br>";
        }
    }

    else{
        $id = $_POST['id'];
        $libri = new Libri();
        $libri->update($id,$titulli,$autori,$sasia);
        header("Location:librat.php");
    }
}