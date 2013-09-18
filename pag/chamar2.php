<?php 
include '../classe/pessoa.php';

$pessoa = new pessoa();

$c = "editar";
$pessoa->setcad($c);

header('Location: ../index.php');
?>