<?php 

class superclasse{
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
}

?>