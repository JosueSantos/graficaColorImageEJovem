		<p class="titprin">Sessão Administrativa</p>
		<h3>
			<a href="pag/deltcad.php"><button>Deletar Banco de Dados</button></a>
			<a href="pag/destruir.php" style="color: red; float:right;"><u>Sair da Sessão Admin</u></a>
		</h3>
		<div id="adm" class="grid_10">
			<h3>Banco de Usuarios</h3>
			<div>
				<?php $pessoa->listarUsuarios(); ?>
			</div>
			<h3>Registro de Mensagens</h3>
			<div>
				<?php $pessoa->mensagem(); ?>
			</div>
		</div>
