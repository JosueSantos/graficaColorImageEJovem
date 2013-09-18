<?php
if($pessoa->getcad()=="admin"){
	echo '	<ul>
				<li id="menulog" class="grid_12 center">Gráfica Color Image -- Onde as imagens ganham vida</li>
			</ul>
			<div id="conteudo" class="grid_12">
				<div id="cont" class="grid_10 prefix_1">
					<div id="tabs-1">';
						include 'pag/admin.php';
	echo '			</div>
				</div>
			</div>';
	
}elseif($pessoa->getcad()=="editar"){
	echo '	<ul>
				<li id="menulog" class="grid_12 center">Gráfica Color Image -- Onde as imagens ganham vida</li>
			</ul>
			<div id="conteudo" class="grid_12">
				<div id="cont" class="grid_10 prefix_1">
					<div id="tabs-1">';
						include 'pag/editar.php';
	echo '			</div>
				</div>
			</div>';
		
}elseif(isset($_SESSION['usuarioLogado'])){
	echo '	<ul>
				<li id="menulog" class="grid_12 center">Gráfica Color Image -- Onde as imagens ganham vida</li>
			</ul>
			
				<div id="conteudo" class="grid_12">			
					<div id="cnt">
						<h3>Quem Somos</h3>
						<div>';
							include 'pag/quemsomos.html';
				echo '	</div>
						<h3>Cliente</h3>
						<div>';
							include 'pag/cliente.html';
				echo '	</div>
						<h3>Produtos</h3>
						<div>';
							include 'pag/produtos.html';
				echo '	</div>
						<h3>Onde Estamos</h3>
						<div>';
							include 'pag/ondeestamos.html';
				echo '	</div>
						<h3>Fale Conosco</h3>
						<div>';
							include 'pag/faleconosco.php';
				echo '	</div>
				</div>
			</div>';
}elseif($pessoa->getcad()=="cadastrar"){
	echo '<ul>
				<li id="menulog" class="grid_12 center">Faça o login para ter acesso ao site!</li>
		</ul>
		<div id="conteudo" class="grid_12">
			<div id="cont" class="grid_10 prefix_1">';
				include 'pag/cadastro.php';
	echo '	</div>
		</div>';
}else {
	echo '<ul>
				<li id="menulog" class="grid_12 center">Faça o login para ter acesso ao site!</li>
		  </ul>
		  <div id="conteudo" class="grid_12">			
		  		<div id="cont" class="grid_10 prefix_1">';
					include 'pag/quemsomos.html';
		echo '	</div>
		  </div>';
}
?>