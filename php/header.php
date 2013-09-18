<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8" />
		<title>Gráfica Color Image&mdash;Quem Somos</title>
		<link rel="stylesheet" href="../css/960.css"  type="text/css" />
		<link rel="stylesheet" href="../css/reset.css"  type="text/css" />
		<link rel="stylesheet" href="../css/estilo.css"  type="text/css" />
		
	</head>	
	<body>
		
		<div class="container_16">
			
			<div id="banner" class="grid_16"></div>
			
			<!------------INÍCIO DO LOGIN------------>
			<div id="caixaA" class="grid_4">
				<div class="grid_3">
					<?php 
					include '../classe/pessoa.php';
					$pessoa= new pessoa();
					?>
					<img alt="Login" src="../img/login.png" width="130px" height="30px"><img alt="Usuário" src="../img/usuario.png" width="30px" height="30px"><br>
					Bem Vindo
					<br>
					<?=(isset($_SESSION['usuarioLogado']['nome'])) ? $_SESSION['usuarioLogado']['nome'].' | <a href="sair.php">Sair</a>' : ' | <a href="sair.php">Sair</a>';?>
					<br>
					E-mail:
					<?=$_SESSION['usuarioLogado']['email'];?>
					<br>
					tipo de conta:
					<br>
					<?php 
					switch ($_SESSION['usuarioLogado']['conta']){
						case 1:
							echo " Conta Cliente ";
							break;
						case 2:
							echo " Indefinido ";
							break;
						case 3:
							echo " Administrador ";
							echo '<a href="admin.php"><input type="button" value="Área administrativa"></a>';
							break;
					}?>	
					<a href="editar.php"><input type="button" value="Editar Conta"></a>
					
				</div>
			</div>
			<!------------FIM DO LOGIN------------>
			
			<!------------INÍCIO DO MENU------------>
			<div id="menu" class="grid_12">
				<div id="menu0" class="grid_3 prefix_1">
					<div id="menu1" class="grid_3 alpha omega">
						Color Image
						<ul>
							<li><a href="quemsomos.php">Quem Somos</a></li>
							<li><a href="ondeestamos.php">Onde Estamos</a></li>
						</ul>
					</div>
				</div>
				<div id="menu1" class="grid_3">
					Serviços
					<ul>
						<li><a href="produtos.php">Produtos</a></li>
						<li><a href="cliente.php">Clientes</a></li>
					</ul>
				</div>
				<div id="menu1" class="grid_3">
					Contato
					<ul>
						<li><a href="ondeestamos.php">Onde Estamos</a></li>
						<li><a href="faleconosco.php">Fale Conosco</a></li>
					</ul>
				</div>
				<div id="menu1" class="grid_1">
				<a href="sair.php">Sair</a>
				</div>
			</div>
			<!------------FIM DO MENU------------>
