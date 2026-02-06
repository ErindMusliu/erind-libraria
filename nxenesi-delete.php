<?php

include('classes/Nxenesi.php');
$id = $_GET['id'];
$nxenesi = new Nxenesi();
$nxenesi->delete($id);
header("Location:nxenesi.php");