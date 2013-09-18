<?php 
include '../classe/pessoa.php';

$pessoa = new pessoa();

$c = "cadastrar";
$pessoa->setcad($c);

header('Location: ../index.php');
?>