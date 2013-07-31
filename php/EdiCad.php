<?php

include '../classe/pessoa.php';

$pessoa= new pessoa();

$pessoa->nome = $_POST['nome'];
$pessoa->dat = $_POST['dat'];
$pessoa->email = $_POST['email'];
$pessoa->conta = $_POST['conta'];
$pessoa->setuser($_POST['user']);

$pessoa->editar();

?>
