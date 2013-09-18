<?php 
include '../classe/pessoa.php';

$pessoa = new pessoa();

$pessoa->unsetcad();

header('Location: ../index.php');
?>