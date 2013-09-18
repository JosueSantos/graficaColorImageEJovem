<?php
<<<<<<< HEAD
include_once "superclasse.php";

session_start();

error_reporting(E_WARNING);
ini_set(“display_errors”, 1 );

class pessoa extends superclasse{
=======
session_start();

//error_reporting(E_WARNING);
//ini_set(“display_errors”, 1 );

if(!isset($_SESSION['usuarios'])){
	$_SESSION['usuarios'] = array();
}

class pessoa{
>>>>>>> 5842e4e57da058c0e122da2cfe1ff94fa836e527
	public $nome;
	public $dat;
	public $email;
	public $conta;
<<<<<<< HEAD
	public $mennome;
	public $menemail;
	public $assunto;
	public $mensagem;
	
	public function setcad($c){
		$_SESSION['cad'] = $c;
	}
	
	public function unsetcad(){
		unset($_SESSION['cad']);
	}
	
	public function getcad(){
		return $_SESSION['cad'];
	}
	
	function criarSessao(){
		if(!isset($_SESSION['usuarios'])){
		
			$_SESSION['usuarios'] = array();
		
			$file = file("../arquivo/Arquivo.txt");
			$arquivado = unserialize($file[0]);
		
			if($arquivado[0]['nome'] != ''){
				for($i = 0; $i < count($arquivado);$i++){
					$usuar = array(
						'nome'		=>	$arquivado[$i]['nome'],
						'dat'		=>	$arquivado[$i]['dat'],
						'email'		=>	$arquivado[$i]['email'],
						'conta'		=>	$arquivado[$i]['conta'],
						'user'		=>	$arquivado[$i]['user'],
						'senha'		=>	$arquivado[$i]['senha'],
						'mennome'	=>	$arquivado[$i]['mennome'],
						'menemail'	=>	$arquivado[$i]['menemail'],
						'assunto'	=>	$arquivado[$i]['assunto'],
						'mensagem'	=>	$arquivado[$i]['mensagem']
					);
					array_push($_SESSION['usuarios'], $usuar);
				}
			}
		}
=======
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
>>>>>>> 5842e4e57da058c0e122da2cfe1ff94fa836e527
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
<<<<<<< HEAD
				'user'	=>	$this->getuser(),
				'senha'	=>	$this->getsenha()
		);
		array_push($_SESSION['usuarios'], $usuario);
		
		unlink("../arquivo/Arquivo.txt");
		$a = fopen("../arquivo/Arquivo.txt","w");
		$texto = serialize($_SESSION['usuarios']);
		fwrite($a,$texto);
=======
				'user'	=>	$this->user,
				'senha'	=>	$this->senha
		);
		array_push($_SESSION['usuarios'], $usuario);
>>>>>>> 5842e4e57da058c0e122da2cfe1ff94fa836e527
	}

	function sair(){
		unset($_SESSION['usuarioLogado']);
<<<<<<< HEAD
		unset($_SESSION['cad']);
		
		unlink("../arquivo/Arquivo.txt");
		$a = fopen("../arquivo/Arquivo.txt","w");
		$texto = serialize($_SESSION['usuarios']);
		fwrite($a,$texto);
		
		header('Location: ../index.php');
	}
	
	function editar($u){
		for($i = 0; $i < count($_SESSION['usuarios']); $i++){
			if($_SESSION['usuarios'][$i]['user'] == $this->getuser()){
=======
		header('Location: ../index.php');
	}
	
	function editar(){
		for($i = 0; $i < count($_SESSION['usuarios']); $i++){
			if($_SESSION['usuarios'][$i]['user'] == $this->user){
>>>>>>> 5842e4e57da058c0e122da2cfe1ff94fa836e527
				$_SESSION['usuarios'][$i]['nome'] = $this->nome;
				$_SESSION['usuarios'][$i]['dat'] = $this->dat;
				$_SESSION['usuarios'][$i]['email'] = $this->email;
				$_SESSION['usuarios'][$i]['conta'] = $this->conta;
<<<<<<< HEAD
				$_SESSION['usuarios'][$i]['user'] = $u;
				$_SESSION['usuarios'][$i]['senha'] = $this->getsenha();
				$_SESSION['usuarioLogado'] = $_SESSION['usuarios'][$i];
				header('Location: ../index.php');
=======
				$_SESSION['usuarioLogado'] = $_SESSION['usuarios'][$i];
				header('Location: quemsomos.php');
>>>>>>> 5842e4e57da058c0e122da2cfe1ff94fa836e527
			}
		}
	}
	
	function listarUsuarios(){
		for($i = 0; $i < count($_SESSION['usuarios']); $i++){
<<<<<<< HEAD
			if($_SESSION['usuarios'][$i]['nome']!= ''){
				echo '--------- Usuário: '.$i.' -------------<br />';
				echo "Nome--> ".$_SESSION['usuarios'][$i]['nome']."<br/>";
				echo "Dat.Ins.--> ".$_SESSION['usuarios'][$i]['dat']."<br />";
				echo "E-mail--> ".$_SESSION['usuarios'][$i]['email']."<br />";
				echo "T.Cont--> ".$_SESSION['usuarios'][$i]['conta']."<br />";
				echo "User--> ".$_SESSION['usuarios'][$i]['user']."<br />";
				echo "Snh--> ".$_SESSION['usuarios'][$i]['senha']."<br />";
			}
		}
	
	}
	
	function gravarmen(){
		$msn = array(
				'mennome'	=>	$this->mennome,
				'menemail'	=>	$this->menemail,
				'assunto'	=>	$this->assunto,
				'mensagem'	=>	$this->mensagem
		);
		array_push($_SESSION['usuarios'], $msn);
	}
	
	function mensagem(){
		for($i = 0; $i < count($_SESSION['usuarios']); $i++){
			if($_SESSION['usuarios'][$i]['mensagem']!= ''){
				echo '-------------- Fale Conosco-------------<br />';
				echo "Nome--> ".$_SESSION['usuarios'][$i]['mennome']."<br/>";
				echo "E-mail.--> ".$_SESSION['usuarios'][$i]['menemail']."<br />";
				echo "Assunto--> ".$_SESSION['usuarios'][$i]['assunto']."<br />";
				echo "Mensagem---------------------------------------------------
					<br><br>".$_SESSION['usuarios'][$i]['mensagem']."<br />";
			}
		}
	}
	
	function delete(){
		unset($_SESSION['usuarios']);
		unlink("../arquivo/Arquivo.txt");
		
		$_SESSION['usuarios'] = array();
		array_push($_SESSION['usuarios'],$_SESSION['usuarioLogado']);
		
		$a = fopen("../arquivo/Arquivo.txt","w");
		$texto = serialize($_SESSION['usuarios']);
		fwrite($a,$texto);
		
	}
=======
			echo '--------- Usuário: '.$i.' -------------<br />';
			echo "Nome--> ".$_SESSION['usuarios'][$i]['nome']."<br/>";
			echo "Dat.N.--> ".$_SESSION['usuarios'][$i]['dat']."<br />";
			echo "E-mail--> ".$_SESSION['usuarios'][$i]['email']."<br />";
			echo "T.Cont--> ".$_SESSION['usuarios'][$i]['conta']."<br />";
			echo "User--> ".$_SESSION['usuarios'][$i]['user']."<br />";
			echo "Snh--> ".$_SESSION['usuarios'][$i]['senha']."<br />";
		}
	
	}
>>>>>>> 5842e4e57da058c0e122da2cfe1ff94fa836e527
}

?>