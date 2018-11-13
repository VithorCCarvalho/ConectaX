	<?php
		$title = "Contato";

		include_once("head-in.php");
	?>
	<body>
		
	<div class="gtco-loader"></div>
	<div id="page">
	<div class="page-inner">

		<?php 
			include("nav-in.php");
		?>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small"></span>
							<h1>Contato</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Preencha o formulário</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Nome</label>
								<input type="text" id="name" class="form-control" placeholder="Nome">
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="text" id="email" class="form-control" placeholder="Email">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="subject">Assunto</label>
								<input type="text" id="subject" class="form-control" placeholder="Assunto">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">Menssagem</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Menssagem"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Enviar" class="btn btn-primary">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Informações de contato</h3>
						<ul>
							<li class="address">Rua Carajas, 276, Parque São José<br> Três Corações - MG</li>
							<li class="phone"><a href="tel://35988681822">(35) 988681822</a></li>
							<li class="email"><a href="mailto:consultoriaconectax@gmail.com">consultoriaconectax@gmail.com</a></li>
						</ul>
					</div>


				</div>
				</div>
			</div>
		</div>
	</div>

	<?php include("footer-in.php"); ?>

	</body>
</html>

