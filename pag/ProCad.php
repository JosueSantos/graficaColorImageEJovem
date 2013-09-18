<?php

include '../classe/pessoa.php';

$pessoa = new pessoa();
$mensagem ='';

$pessoa->criarSessao();

$pessoa->nome		= $_POST['nome'];
$pessoa->dat		= $_POST['dat'];
$pessoa->email		= $_POST['email'];
$pessoa->conta		= $_POST['conta'];
$pessoa->setuser	($_POST['user']);
$pessoa->setsenha	($_POST['senha']);

/*/////////JQuery Validate-- substituiu a validação por PHP///////////
if($pessoa->nome == ''){
	$mensagem = '<br>Insira um nome.';
}

if($pessoa->email == ''){
	$mensagem .= '<br>Insira um email válido.';
}elseif(!stristr($pessoa->email, '@')){
	$mensagem .= '<br>E-mail inválido.';
}elseif(!stristr($pessoa->email, '.')){
	$mensagem .= '<br>E-mail inválido.';
}

if($pessoa->getuser() == ''){
	$mensagem .= '<br>Insira um usuário.';
}

if($pessoa->getsenha() == ''){
	$mensagem .= '<br>Insira uma senha válida.';
}elseif($pessoa->getsenha() != $_POST['Confsenha']){
	$mensagem .= '<br>Senhas não conferem.';
}
/////////////////////////////////////////////////////////////////////*/

for($i = 0; $i < count($_SESSION['usuarios']); $i++){
	if($_SESSION['usuarios'][$i]['user'] == $pessoa->getuser()){
		$mensagem = 'Usuário já existe!';
	}
}

if($mensagem == ''){
	$pessoa->unsetcad();
	$pessoa->gravar();
	
	echo "	<script>
				alert('Usário cadastrado com sucesso!');
				window.location.assign('../index.php');
			</script>";
}else{
	echo "	<script>
				alert('".$mensagem."');
				javascript:history.back();
			</script>";
}

?>