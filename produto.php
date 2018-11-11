<?php
	$title = 'Consulta';

	include "head-in.php";

	$plano = @$_GET['plano'];

	if($plano == 'oiplaybasico'):
		$plano = 'Oi Total Play Básico';
	elseif($plano == 'oiplayintermediario'):
		$plano = 'Oi Total Play Intermediario';
	elseif($plano == 'oiplaytop'):
		$plano = 'Oi Total Play Top';
	elseif($plano == 'oiresidencialbasico'):
		$plano = 'Oi Residencial Basico';
	elseif($plano == 'oiresidencialintermediario'):
		$plano = 'Oi Residencial Intermediario';
	elseif($plano == 'oiresidencialtop'):
		$plano = 'Oi Residencial Top';
	elseif($plano == 'oiconectadolight'):
		$plano = 'Oi Conectado Light';
	endif;

	$nome = @$_GET['nome'];
	$telefone = @$_GET['whatsapp'];
	$cidade = @$_GET['cidade'];

?>
<body>
	<link rel="stylesheet" type="text/css" href="css/produto.css">

	<div class="contentconsulta">
		<div class="boxleftconsulta">

			<div class="boxleftformulario">
				<h2>Faça sua consulta</h2>
				<h3><?php echo $plano; ?></h3>
				
				<form action=""	method="post">
					<div class="group">      
	      				<input type="text" value="<?php echo $nome; ?>" required name="nome">
	      				<span class="bar"></span>
	      				<label>Nome Completo</label>
    				</div>
    				<div class="group">      
	      				<input type="text" value="<?php echo $telefone; ?>" required name="telefone">
	      				<span class="bar"></span>
	      				<label>Whatsapp ou Telefone</label>
    				</div>
    				<div class="group">      
	      				<input type="text" required name="bairro">
	      				<span class="bar"></span>
	      				<label>Bairro</label>
    				</div>
    				<div class="group">      
	      				<input type="text" required name="rua">
	      				<span class="bar"></span>
	      				<label>Rua</label>
    				</div>
    				<div class="row form-group">
						<div class="col-md-12">
							<select class="form-control select-cidades" value="<?php echo $cidade; ?>" name="cidade">
								<option value="0">Selecione a cidade...</option>
								<option value="Tres Corações">Tres Corações</option>
								<option value="Tres Pontas">Tres Pontas</option>
								<option value="Alfenas">Alfenas</option>
								<option value="Passos">Passos</option>
							</select>
						</div>
					</div>
			  		<button type="submit" class="btn btn-primary">Consultar</button>
				</form>
			</div>

		</div>

		<div class="boxrightconsulta">

			<div class="box">
				<h2><?php echo $plano; ?></h2>
				<ul class="list-group">
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> Internet 15MB</li>
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> Coleção OI</li>
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> Telefone Fixo</li>
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> OI WIFI Fora de Casa</li>
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> Roteador Grátis</li>
				</ul>
<?php

		include 'src/classes/CadastroConsulta.php';

		$insert = new CadastroConsulta();

		

		if (!empty($_POST))
		{
			$dados = $insert->setDados($_POST['nome'], $_POST['telefone'], $_POST['bairro'], $_POST['bairro'], $_POST['rua'], $_POST['cidade']);

			$insert->insert();

		}







?>
			</div>
		</div>
	</div>
</body>
</html>



	