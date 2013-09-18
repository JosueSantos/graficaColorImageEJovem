<?php

include '../classe/pessoa.php';

$pessoa = new pessoa();
$mensagem ='';

$pessoa->nome		= $_POST['nome'];
$pessoa->dat		= $_POST['dat'];
$pessoa->email		= $_POST['email'];
$pessoa->conta		= $_POST['conta'];
$pessoa->setuser	($_POST['user']);
$pessoa->setsenha	($_POST['senha']);

if(!stristr($pessoa->email, '@')){
	$mensagem = 'E-mail inválido.<br>';
}

if($pessoa->getsenha() != $_POST['Confsenha']){
	$mensagem .= 'Senhas não conferem.<br>';
}

if($mensagem == ''){
	$pessoa->gravar();
	
	echo "<script>alert('Usário cadastrado com sucesso!');
			window.location.assign('../index.php')</script>";
}

else{
	echo $mensagem;
	echo '<a href="javascript:history.back()">Voltar</a>';
}

?>