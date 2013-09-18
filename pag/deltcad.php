<?php 
include '../classe/pessoa.php';

$pessoa = new pessoa();

$pessoa->delete();

header('Location: ../index.php');
?>