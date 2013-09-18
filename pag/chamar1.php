<?php 
include '../classe/pessoa.php';

$pessoa = new pessoa();

$c = "admin";
$pessoa->setcad($c);

header('Location: ../index.php');
?>