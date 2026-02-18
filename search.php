<?php

include('classes/Libri.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $error = [];

    if(isset($_POST['search']) && !empty($_POST['search'])){
        $search = htmlspecialchars(strip_tags(trim($_POST['search'])));
    }

    else{
        $error[] = "Kerkoni cfare te deshironi";
    }

    if(count($error) > 0){
        foreach($error as $e){
            echo $e;
        }
    }

    else{
        $libri = new Libri();
        $libri->search($search);
        header('Location:search-result.php');
    }
}