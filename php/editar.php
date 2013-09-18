<?php include 'header.php';?>
<!------------INÍCIO DO CONTEÚDO------------>

<div id="conteudo" class="grid_12">
				
	<div id="cont" class="grid_10 prefix_1">
		<p class="titprin">Edição de Cadastro</p>
		<br>&nbsp;		
		<form action="EdiCad.php" method="post">
		
			Cliente<br>
			&nbsp; <input type="text" name="nome" class="grid_8" value="<?=$_SESSION['usuarioLogado']['nome'];?>">
			<br><br>
			Data de Nascimento<br>
			&nbsp; <input type="text" name="dat" class="grid_8" value="<?=$_SESSION['usuarioLogado']['dat'];?>">
			<br><br>
			Email<br>
			&nbsp; <input type="text" name="email" value="<?=$_SESSION['usuarioLogado']['email'];?>" class="grid_8">
			<br><br>
			Tipo de Conta<br>&nbsp;
			<select name="conta">
				<option value="1" <?=($_SESSION['usuarioLogado']['conta'] == 1) ? 'selected="selected"': ''; ?> >Conta Cliente</option>
				<option value="2" <?=($_SESSION['usuarioLogado']['conta'] == 2) ? 'selected="selected"': ''; ?> >Indefinido</option>
				<option value="3" <?=($_SESSION['usuarioLogado']['conta'] == 3) ? 'selected="selected"': ''; ?> >Administrativa</option>
			</select><br>
			Usúario*<br>
			&nbsp; <input type="text" name="user" value="<?=$_SESSION['usuarioLogado']['user'];?>" class="grid_8" readonly="readonly">
			<br><br>
			Senha*<br>
			&nbsp; <input value="<?=$_SESSION['usuarioLogado']['senha'];?>" class="grid_8" readonly="readonly">
			<br><br>
			<input type="submit" value="Enviar Dados">
			&nbsp;&nbsp;
			<input type="reset" value="Apagar tudo">
			<h6>
				<font color="red">
					*Campos Inalteráveis
				</font>
			</h6>
		
		</form>
		<br>
		<div id="voltar" class="grid_5">
			<a href="quemsomos.php">Voltar para a página inicial.</a>
		</div>
		
	</div>
</div>

<!------------FIM DO CONTEÚDO------------>
<?php include 'footer.php';?>