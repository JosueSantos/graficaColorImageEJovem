<?php 
	include_once 'classe/pessoa.php';
	$pessoa= new pessoa();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="css/960.css"  type="text/css" />
		<link rel="stylesheet" href="css/estilo.css"  type="text/css" />
		<link rel="stylesheet" href="css/south-street/jquery-ui-1.10.3.custom.css" >
		<link rel='stylesheet' href="css/SlideBoxHome.css" />
		
		<script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
		<script src="js/jquery-ui-1.10.3.custom.js"></script>
		<script src="js/jquery.ui.datepicker-pt-BR.js"></script>
		<script src="js/slideBoxEasing.js"></script>
		<script src="js/ActionSlidebox.js"></script>
		<script src="js/jquery.validate.js" ></script>
		
		<title>Gráfica Color Image</title>
		
		<style type="text/css">
			label.error {color: red; font-size:10px}
		</style>
		
		<script type="text/javascript">
		
		function mascaraData(campoData){
		    var data = campoData;
		    if (data.length == 2){
		        data += '/';
		        document.cadastro.dat.value = data;
				return true;              
		    }
		    if (data.length == 5){
		        data += '/';
		        document.cadastro.dat.value = data;
		        return true;
		    }
		}

		function valida(conta){
			var tipo = conta;
			if (tipo == 3){
				var amd = prompt ("Insira a senha Admin");
				if (amd == as){
					return true;
				}else{
					document.cadastro.conta.value = '2';
				}
			}
		}
				
		
			$(document).ready(
				function(){

					$("button").add("input")
						.hover(
							function(){
								$(this).css("box-shadow","2px 2px 2px black")
							},function(){
								$(this).css("box-shadow","none")
						});
					
					$( "#cnt" ).add( "#adm" )
					.accordion({
						collapsible: true,
						active: true
					});

					$( "#data" ).datepicker({
						showOn: "button",
						buttonImage: "img/calen.png",
						buttonImageOnly: true,
						changeMonth: true,
						changeYear: true, yearRange : 'c-65:c+50',
						monthNamesShort: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
						dayNamesMin: ['Dom','Seg',' Ter','Qua','Qui','Sex','Sáb'],
						dateFormat: 'dd/mm/yy'
					});
			});x=3;$(document).ready(
					function(){
					  $('#cadastro').validate({
				            rules:{
				                nome:{
				                    required: true,
				                },
				                email: {
				                    required: true,
				                    email: true
				                },
								user:{
									required: true
								},
				                senha: {
				                    required: true
				                },
				                Confsenha: {
				                    required: true,
				                    equalTo: "#senha"
				                }
				            },
				            messages:{
				                nome:{
				                    required: "<br><br>Campo de preenchimento obrigatório",
				                },
				                email: {
				                    required: "<br><br>Campo de preenchimento obrigatório",
				                    email: "<br><br>O campo email deve conter um email válido."
				                },
								user: {
									required: "<br><br>Campo de preenchimento obrigatório"
								},
				                senha: {
				                    required: "<br><br>Campo de preenchimento obrigatório"
				                },
				                Confsenha:{
				                    required: "<br><br>Campo de preenchimento obrigatório",
				                    equalTo: "<br><br>O campo confirmação de senha deve ser identico ao campo senha."
				                }
				            }
				        });
				});as=x;
		
		</script>
		
	</head>
	<body>

		<div class="container_16">	
			
<!------------INICIO DO BANNER------------>
			<div style=" width: 940px; height:270px;">
				<div id="base_slidebox">
			        <div id="slidebox">
			            <div class="container">
			                <div class="content">
			                    <div><img src="img/Banner.png" border="0" alt="Imagem 1" /></div>
			                </div>
			                <div class="content">
			                    <div><img src="img/Banner2.png" border="0" alt="Imagem 2" /></div>
			                </div> 
			                <div class="content">   
			                    <div><img src="img/Banner3.png" border="0" alt="Imagem 3"  /></div>
			                </div>
			                <div class="content">
			                    <div><img src="img/Banner4.png" border="0" alt="Imagem 4" /></div>
			                </div>
			            </div>
			        </div>
			        
		
					<div class="thumbs">
		    			<a href="#" onClick="Slidebox('1');return false" class="thumb">&nbsp;</a>
						<a href="#" onClick="Slidebox('2');return false" class="thumb">&nbsp;</a>
						<a href="#" onClick="Slidebox('3');return false" class="thumb">&nbsp;</a>
						<a href="#" onClick="Slidebox('4');return false" class="thumb">&nbsp;</a>
					</div>
		   			<div class="next"></div>
				    <div class="previous"></div>
		    	</div>
			</div>
<!------------FIM DO BANNER------------>
			
<!------------INICIO DO LOGIN------------>
			<?php include 'pag/login.php';?>
<!------------FIM DO LOGIN------------>
			
<!------------INICIO DO CONTÉUDO------------>
			<?php include 'pag/conteudo.php';?>
<!------------FIM DO CONTÉUDO------------>
			
<!------------INICIO DOS PRODUTOS------------>
			<div id="caixaB" class="grid_4 center" >
				<p class="tituloc">Principais Produtos</p>
				<p class="destaque">
					Cartão de Visita
					<br>
					Folhetos
					<br>
					Rótulos
					<br>
					Catálogos
					<br>
					Calendários
					<br>
					Convites
					<br>
					Embalagens
					<br>
					Banner
					<br>
					Envelopes
				</p>
			</div>
<!------------FIM DOS PRODUTOS------------>
				
<!------------INICIO DA CAIXA AUTOR------------>
			<div id="caixaC" class="grid_4 center">
				<p class="eu">
					<font class="eutit">Desenvolvido por:</font>
					<br>
					Josué dos Santos Marques
					<br>
					Aluno E-Jovem / 2013
					<br>
					Contato
					<br>
					josuemarques3@gmail.com
					<br>
					&copy;2013 JS .LDTA
				</p>
			</div>
<!------------FIM DA CAIXA AUTOR------------>
				
<!------------INÍCIO DAS REDES SOCIAIS------------>
			<div id="caixaD" class="grid_4 center">
				<p class="tituloc">Fique por Dentro</p>
				<a href="https://www.facebook.com/" target="_blank">
					<img src="img/face.png" width="80px" height="80px" alt="Facebook">
				</a>
				<a href="http://mail.google.com/" target="_blank">
					<img src="img/e-mail.png" width="80px" height="80px" alt="E-Mail">
				</a>
			</div>
<!------------FIM DAS REDES SOCIAIS------------>
					
<!------------INÍCIO DO RODAPÉ------------>
			<div id="rodape" class="grid_16 center">
				<br><br>
				<table>
					<tr>
						<td>
							<img src="img/ejovem2.png" align="left" width="300px" hspace="50px" alt="Projeto E-Jovem">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</td>
						<td>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="img/ceara.png" width="90px" height="70px" align="top" alt="Governo do Estado do Ceára">
						</td>
						<td>	
							<font class="a">
								Governo 
								<font class="b">do</font>
								<br>
								Estado 
								<font class="b">do</font> 
								Ceará
							</font>
							<br>
							<font class="c">
								Secretaria da Educação
							</font>
						</td>
					</tr>
				</table>
			</div>
			
		</div>
	
	</body>
</html>
