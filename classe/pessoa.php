<?php
session_start();

if(!isset($_SESSION['usuarios'])){
	$_SESSION['usuarios'] = array();
}

class pessoa{
	public $nome;
	public $dat;
	public $email;
	public $conta;
	private $user;
	private $senha;
	
	function setuser($user){
		$this->user = $user;
	}
	
	function getuser(){
		return $this->user;
	}
	
	function setsenha($senha){
		$this->senha = $senha;
	}
	
	function getsenha(){
		return $this->senha;
	}
	
	function logar($login,$senha){
		for($i = 0; $i < count($_SESSION['usuarios']); $i++){
			if($_SESSION['usuarios'][$i]['user'] == $login && $_SESSION['usuarios'][$i]['senha'] == $senha){
				$_SESSION['usuarioLogado'] = $_SESSION['usuarios'][$i];
				return true;
			}
		}
		return false;
	}
	
	function gravar(){
		$usuario = array(
				'nome'	=>	$this->nome,
				'dat'	=>	$this->dat,
				'email'	=>	$this->email,
				'conta'	=>	$this->conta,
				'user'	=>	$this->user,
				'senha'	=>	$this->senha
		);
		array_push($_SESSION['usuarios'], $usuario);
	}

	function sair(){
		unset($_SESSION['usuarioLogado']);
		header('Location: ../index.php');
	}
	
	function editar(){
		for($i = 0; $i < count($_SESSION['usuarios']); $i++){
			if($_SESSION['usuarios'][$i]['user'] == $this->user){
				$_SESSION['usuarios'][$i]['nome'] = $this->nome;
				$_SESSION['usuarios'][$i]['dat'] = $this->dat;
				$_SESSION['usuarios'][$i]['email'] = $this->email;
				$_SESSION['usuarios'][$i]['conta'] = $this->conta;
				$_SESSION['usuarioLogado'] = $_SESSION['usuarios'][$i];
				header('Location: quemsomos.php');
			}
		}
	}
}

?>