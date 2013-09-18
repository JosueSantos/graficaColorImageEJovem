			<p class="titprin"> Fale Conosco</p>
			<form action="pag/ProMen.php" method="post">
				<table>
					<tr>
						<td>
							Nome
						</td>
						<td colspan="2">
							<input type="text" name="mennome" value="<?=(isset($_SESSION['usuarioLogado']['nome'])) ? $_SESSION['usuarioLogado']['nome']: '';?>" class="grid_8">
						</td>
					</tr>
					<tr>
						<td>
							E-Mail
						</td>
						<td>
							<input type="text" name="menemail" value="<?=(isset($_SESSION['usuarioLogado']['nome'])) ? $_SESSION['usuarioLogado']['email']: '';?>" class="grid_8">
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
							<textarea name="mensagem" class="grid_9" rows="10"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="center">
							<input type="submit" value="Enviar Dados">
							<input type="reset" value="Apagar tudo">
						</td>
					</tr>
				</table>
			</form>