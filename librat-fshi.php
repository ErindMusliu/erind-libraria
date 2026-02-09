<?php

include('classes/Libri.php');
$id = $_GET['id'];
$libri = new Libri();
$libri->delete($id);
header("Location:librat.php");