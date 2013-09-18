		<p class="titprin">Edição de Cadastro</p>
		<br>&nbsp;		
		<form action="pag/EdiCad.php" id="cadastro" name="cadastro" method="post">
		
			Cliente<br>
			&nbsp; <input type="text" name="nome" class="grid_8" value="<?=$_SESSION['usuarioLogado']['nome'];?>">
			<br><br>
			Data de Cadastramento<br>
			&nbsp; <input type="text" name="dat" id="data" class="grid_3" OnKeyUp="mascaraData(this.value);" maxlength="10" title="Digite ou clique no icone ao lado" value="<?=$_SESSION['usuarioLogado']['dat'];?>" />
			<br><br>
			Email<br>
			&nbsp; <input type="text" name="email" value="<?=$_SESSION['usuarioLogado']['email'];?>" class="grid_8">
			<br><br>
			Tipo de Conta<br>&nbsp;
			<select name="conta" onChange="valida(this.value);">
				<option value="1" <?=($_SESSION['usuarioLogado']['conta'] == 1) ? 'selected="selected"': ''; ?> >Conta Cliente</option>
				<option value="2" <?=($_SESSION['usuarioLogado']['conta'] == 2) ? 'selected="selected"': ''; ?> >Indefinido</option>
				<option value="3" <?=($_SESSION['usuarioLogado']['conta'] == 3) ? 'selected="selected"': ''; ?> >Administrativa</option>
			</select><br>
			Usúario<br>
			&nbsp; <input type="text" name="user" value="<?=$_SESSION['usuarioLogado']['user'];?>" class="grid_8">
			<br><br>
			Senha<br>
			&nbsp; <input type="password" name="senha" id="senha" value="<?=$_SESSION['usuarioLogado']['senha'];?>" class="grid_8">
			<br><br>
			Confirme sua nova Senha<br>
			&nbsp; <input type="password" name="Confsenha" value="<?=$_SESSION['usuarioLogado']['senha'];?>" class="grid_8">
			<br>
			<input type="submit" value="Enviar Dados">
			&nbsp;&nbsp;
			<input type="reset" value="Apagar tudo">
					
		</form>
		<br>
		<div id="voltar" class="grid_5">
			<a href="pag/destruir.php">Voltar para a página inicial.</a>
		</div>