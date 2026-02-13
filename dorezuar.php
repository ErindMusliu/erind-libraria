<?php

include('classes/Furnizimi.php');

$id = $_GET['id'];
$furnizimi = new Furnizimi();
$furnizimi->dataArritjes($id);
header('Location:furnizimet.php');