<?php

include('classes/Huazimi.php');

$id = $_GET['id'];
$huazimi = new Huazimi();
$huazimi->dataKthimit($id);
header('Location:huazimet.php');