<?php

error_reporting(E_WARNING);
ini_set(“display_errors”, 1 );

include_once '../classe/pessoa.php';

$pessoa = new pessoa();

$pessoa -> criarSessao();

if($_POST['usuario']!=''){
	if ($pessoa -> logar($_POST['usuario'], $_POST['senha'])){
		header('Location: ../index.php');
	}
	else{
		echo "<script>alert('Login inválido!');
			window.location.assign('../index.php')</script>";
	} 
}
else{
	echo "<script>alert('Login inválido!');
		window.location.assign('../index.php')</script>";
} 


?>