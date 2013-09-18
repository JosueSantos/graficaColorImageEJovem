		<div id="caixaA" class="grid_4">
			<?php
			if($pessoa->getcad()=="cadastrar"){
				echo '<form>
					<table>
						
						<tr>
							<td colspan="2">
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<img alt="Login" src="img/login.png" width="150px" height="60px">
								<br><br>
							</td>
						</tr>
						<tr>
							<td>
								<img alt="Usuário" src="img/usuario.png">
							</td>
							<td>
								<input value="...Faça seu Cadastro" readonly="readonly" class="grid_3  alpha omega">
								<br><br>
							</td>
						</tr>
						<tr>
							<td>
								<img alt="Senha" src="img/senha.png">
							</td>
							<td>
								<input value="...Faça seu Cadastro" readonly="readonly" class="grid_3  alpha omega">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<a href="pag/destruir.php"><h3>&nbsp;&nbsp;&nbsp;&nbsp;<u>Voltar</u></h3></a>
							</td>
						</tr>
					
					</table>
				</form>';
			}elseif(!isset($_SESSION['usuarioLogado'])){
				echo '<form action="pag/ProLog.php" method="post">
					<table>
								
						<tr>
							<td colspan="2">
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<img alt="Login" src="img/login.png" width="150px" height="60px">
								<br><br>
							</td>
						</tr>
						<tr>
							<td>
								<img alt="Usuário" src="img/usuario.png">
							</td>
							<td>
								<input type="text" name="usuario" class="grid_3 alpha omega">
								<br><br>
							</td>
						</tr>
						<tr>
							<td>
								<img alt="Senha" src="img/senha.png">
							</td>
							<td>
								<input type="password" name="senha" class="grid_3 alpha omega">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" value="Entrar">
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="pag/chamar.php"><u>Cadastrar</u></a>
							</td>
						</tr>
						
					</table>
				</form>';
			}else{
				echo '<div class="grid_4" style="margin-left:5px;"><img alt="Login" src="img/login.png" width="120px" height="30px">';
				if ($_SESSION['usuarioLogado']['conta'] == 3) 
					echo '<img alt="Usuário" src="img/admin.png" width="30px" height="30px"><br>';
				elseif ($_SESSION['usuarioLogado']['conta'] == 2) 
					echo '<img alt="Usuário" src="img/indefinido.png" width="30px" height="30px"><br>';
				else 
					echo '<img alt="Usuário" src="img/usuario.png" width="30px" height="30px"><br>';
				echo 'Bem Vindo<br>'.
					$_SESSION['usuarioLogado']['nome'].
					' | <a href="pag/sair.php"><button>Sair</button></a>
					<br>
					E-mail:<br>'.
					$_SESSION['usuarioLogado']['email'].
					'<br>
					tipo de conta:
					<br>';
					 
				switch ($_SESSION['usuarioLogado']['conta']){
					case 1:
						echo " Cliente ";
						break;
					case 2:
						echo " Indefinido ";
						break;
					case 3:
						echo " Administrador ";
						echo '<a href="pag/chamar1.php"><input type="button" value="Área administrativa"></a>';
						break;
				}
				echo '<br><a href="pag/chamar2.php"><input type="button" value="Editar Conta"></a></div>';
			}
			?>	
		</div>