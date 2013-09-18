		<p class="titprin"> Cadastro</p>
		<br>&nbsp;		
		<form action="pag/ProCad.php" method="post" name="cadastro" id="cadastro">
			
			Cliente<font color="red">*</font><br>
			&nbsp; <input type="text" name="nome" class="grid_8">
			<br><br>
			Data de Cadastramento<br>
			&nbsp; <input type="text" name="dat" id="data" class="grid_3" OnKeyUp="mascaraData(this.value);" 
			maxlength="10" title="Digite ou clique no icone ao lado" placeholder="dd/mm/aaaa" />
			<br><br>
			Email<font color="red">*</font><br>
			&nbsp; <input type="text" name="email" class="grid_8">
			<br><br>
			Tipo de Conta<br>&nbsp;
			<select name="conta" onChange="valida(this.value);">
				<option value="1">Conta Cliente</option>
				<option value="2">Indefinido</option>
			<option value="3">Administrativa</option>
			</select><br><br>
			Usúario<font color="red">*</font><br>
			&nbsp; <input type="text" name="user" class="grid_8">
			<br><br>
			Senha<font color="red">*</font><br>
			&nbsp; <input type="password" name="senha" id="senha" class="grid_8">
			<br><br>
			Confirme a Senha<font color="red">*</font><br>
			&nbsp; <input type="password" name="Confsenha" class="grid_8">
			<br>
			<input type="submit" value="Enviar Dados">
			&nbsp;&nbsp;
			<input type="reset" value="Apagar tudo">
			<h6>
				<font color="red">
					(*) Campos obrigatorios
				</font>
			</h6>
		</form>
		<br>
		<div id="voltar" class="grid_5">
			<a href="pag/destruir.php">Voltar para a página inicial.</a>
		</div>