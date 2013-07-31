<?php

include '../classe/pessoa.php';

$pessoa= new pessoa();

if ($pessoa -> logar($_POST['usuario'], $_POST['senha'])){
	header('Location: quemsomos.php');
} 
	else{
		echo "<script>alert('Login inválido!');
			window.location.assign('../index.php')</script>";
	} 


?>