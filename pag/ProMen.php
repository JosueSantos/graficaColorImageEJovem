<?php
include '../classe/pessoa.php';

$pessoa = new pessoa();

$pessoa->mennome		= $_POST['mennome'];
$pessoa->menemail		= $_POST['menemail'];
$pessoa->assunto		= $_POST['assunto'];
$pessoa->mensagem		= $_POST['mensagem'];

$pessoa->unsetcad();
$pessoa->gravarmen();
header('Location: ../index.php');
?>