<?php include 'header.php';?>
<!------------INÍCIO DO CONTEÚDO------------>
	<div id="conteudo" class="grid_12">
		<div id="cont" class="grid_10 prefix_1">
			<p class="titprin"> Fale Conosco</p>
			<table>
				<form action="ProMen.php" method="post">
				
					<tr>
						<td>
							Nome
						</td>
						<td colspan="2">
							<input type="text" name="nome" value="<?=(isset($_SESSION['usuarioLogado']['nome'])) ? $_SESSION['usuarioLogado']['nome']: '';?>" class="grid_8">
						</td>
					</tr>
					<tr>
						<td>
							E-Mail
						</td>
						<td>
							<input type="text" name="email" value="<?=$_SESSION['usuarioLogado']['email'];?>" class="grid_8">
						</td>
					</tr>
					<tr>
						<td>
							Assunto
						</td>
						<td>
							<input type="text" name="assunto" class="grid_8">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<p>Mensagem
							<br>
							<textarea name="mensagem" cols="65" rows="10"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="center">
							<input type="submit" value="Enviar Dados">
							<input type="reset" value="Apagar tudo">
						</td>
					</tr>
				</form>
			</table>
		</div>
	</div>
<!------------FIM DO CONTEÚDO------------>
<?php include 'footer.php';?>