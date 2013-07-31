<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8" />
		<title>Gráfica Color Image&mdash;Cadastro</title>
		<link rel="stylesheet" href="../css/960.css"  type="text/css" />
		<link rel="stylesheet" href="../css/reset.css"  type="text/css" />
		<link rel="stylesheet" href="../css/estilo.css"  type="text/css" />
		
	</head>	
	<body>
		
		<div class="container_16">

			<div id="banner" class="grid_16"></div>
			
			<!------------INÍCIO DO LOGIN------------>
			<div id="caixaA" class="grid_4">
				<form action="ProLog.php" method="post">
					<table>
						
						<tr>
							<td colspan="2">
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<img alt="Login" src="../img/login.png" width="150px" height="60px">
								<br><br>
							</td>
						</tr>
						<tr>
							<td>
								<img alt="Usuário" src="../img/usuario.png">
							</td>
							<td>
								<input value="...Faça seu Cadastro" class="grid_3">
								<br><br>
							</td>
						</tr>
						<tr>
							<td>
								<img alt="Senha" src="../img/senha.png">
							</td>
							<td>
								<input value="...Faça seu Cadastro" class="grid_3">
								<br><br>
							</td>
						</tr>
						
					
					</table>
				</form>
			</div>
			<!------------FIM DO LOGIN------------>
			
			<!------------INÍCIO DO MENU------------>
			<div id="menu" class="grid_12">
				Para ter acesso ao site, por favor faça o login.
			</div>
			<!------------FIM DO MENU------------>
			
			<!------------INÍCIO DO CONTEÚDO------------>
			<div id="conteudo" class="grid_12">
				
				<div id="cont" class="grid_10 prefix_1">
					<p class="titprin"> Cadastro</p>
					<br>&nbsp;		
					<form action="ProCad.php" method="post">
					
						Cliente*<br>
						&nbsp; <input type="text" name="nome" class="grid_8" value="Nome">
						<br><br>
						Data de Nascimento<br>
						&nbsp; <input type="text" name="dat" class="grid_8" value="dd/mm/aaaa">
						<br><br>
						Email*<br>
						&nbsp; <input type="text" name="email" class="grid_8">
						<br><br>
						Tipo de Conta<br>&nbsp;
						<select name="conta">
							<option value="1">Conta Cliente</option>
							<option value="2">Indefinido</option>
							<option value="3">Administrativa</option>
						</select><br>
						Usúario*<br>
						&nbsp; <input type="text" name="user" class="grid_8">
						<br><br>
						Senha*<br>
						&nbsp; <input type="password" name="senha" class="grid_8">
						<br><br>
						Confirme a Senha*<br>
						&nbsp; <input type="password" name="Confsenha" class="grid_8">
						<br>
						<input type="submit" value="Enviar Dados">
						&nbsp;&nbsp;
						<input type="reset" value="Apagar tudo">
						<h6>
							<font color="red">
								*Campos obrigatorios
							</font>
						</h6>
					
					</form>
					<br>
					<div id="voltar" class="grid_5">
						<a href="../index.php">Voltar para a página inicial.</a>
					</div>
					
				</div>
			</div>
			<!------------FIM DO CONTEÚDO------------>
<?php include 'footer.php';?>