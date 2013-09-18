<?php include 'header.php';?>
<!------------INÍCIO DO CONTEÚDO------------>

<div id="conteudo" class="grid_12">
	<div id="cont" class="grid_10 prefix_1">
		<p class="titprin">Sessão Administrativa</p>
			
		<?php 
		
		$pessoa= new pessoa();
		$pessoa->listarUsuarios();
		
		?>
			
		</div>
</div>

<!------------FIM DO CONTEÚDO------------>
<?php include 'footer.php';?>