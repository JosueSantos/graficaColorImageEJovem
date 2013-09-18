<?php
include '../classe/pessoa.php';

$pessoa= new pessoa();

$pessoa->nome = $_POST['nome'];
$pessoa->dat = $_POST['dat'];
$pessoa->email = $_POST['email'];
$pessoa->conta = $_POST['conta'];

$u = $_POST['user'];

$pessoa->setuser($_SESSION['usuarioLogado']['user']);
$pessoa->setsenha($_POST['senha']);

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

if($u == ''){
	$mensagem .= '<br>Insira um usuário.';
}

if($pessoa->getsenha() == ''){
	$mensagem .= '<br>Insira uma senha válida.';
}elseif($pessoa->getsenha() != $_POST['Confsenha']){
	$mensagem .= '<br>Senhas não conferem.';
}
/////////////////////////////////////////////////////////////////////*/

if($u != $pessoa->getuser()){
	for($i = 0; $i < count($_SESSION['usuarios']); $i++){
		if($_SESSION['usuarios'][$i]['user'] == $u){
			$mensagem = 'Usuário já existe.';
		}
	}
}

if($mensagem == ''){
	$pessoa->unsetcad();
	$pessoa->editar($u);
	
}else{
	echo "	<script>
				alert('".$mensagem."');
				javascript:history.back();
			</script>";
}

?>