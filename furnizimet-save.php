<?php

include('classes/Furnizimi.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $error = [];

    if(isset($_POST['libri']) && !empty($_POST['libri'])){
        $libri = htmlspecialchars(strip_tags(trim($_POST['libri'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Librit";
    }

    if(isset($_POST['sasia_furnizimit']) && !empty($_POST['sasia_furnizimit'])){
        $sasia_furnizimit = htmlspecialchars(strip_tags(trim($_POST['sasia_furnizimit'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Sasise se Furnizimit";
    }

    if(isset($_POST['cmimi_sasi']) && !empty($_POST['cmimi_sasi'])){
        $cmimi_sasi = htmlspecialchars(strip_tags(trim($_POST['cmimi_sasi'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Cmimit";
    }

    if(isset($_POST['zbritje']) && !empty($_POST['zbritje'])){
        $zbritje = htmlspecialchars(strip_tags(trim($_POST['zbritje'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Zbritjes";
    }

    if(count($error) > 0){
        foreach($error as $e){
            echo $e."<br>";
        }
    }

    else{
        $furnizimi = new Furnizimi();
        $furnizimi->saveFurnizimi($libri,$sasia_furnizimit,$cmimi_sasi,$zbritje);
        header('Location:furnizimet.php');
    }
}