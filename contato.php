<?php
	$msg=0;
	@$msg=$_REQUEST['msg'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title> BELM Cursos: HTML5, Java, PHP, Banco de Dados e muito mais… </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<!--Cabeçalho --> 
	<header>
		<nav class="menu navbar-expand-md bg-azul-principal menu-fixed">
			<a href="buscar.php" class="navbar-brand" style="color: #fff">
				BELM Cursos
			</a>
			<div class="posicionamento-menu" id="navbarCollapse">
				<ul class="alinhamento-usuario navbar-nav">
					<li>
						<a href="buscar.php" class="nav-link" style="color: #fff;"> Home </a>
					</li>
					<li>
						<a class="nav-link" href="cursosSF.php" style="color: #fff"> Cursos </a>				
					</li>
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" style="color: #fff"> Ajuda 
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
							<a class="dropdown-item" href="sobre.php"> Sobre </a>
							<a class="dropdown-item" href="contato.php"> Contato </a>
						</div>
					</li>
				</ul>
				<ul class="navbar-nav" style="float: right;"> 
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="dropdownUsuario" role="button" data-toggle="dropdown" style="color: #fff"> Usuário </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="float: right;">
							<a class="dropdown-item" onclick="deslogar()">Sair</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Fim do Cabeçalho --> 

	<!-- Contato --> 
	<div class="container">
		<section class="jumbotron">
			<h1> Contato </h1>
			<p> Você tem alguma dúvida? Elogio? Sugestão? Envie-nos uma mensagem através do formulário abaixo. Nossa equipe de atendimento terá prazer em te auxiliar. </p>
			<?php if($msg=="enviado"): ?>
			<p style="color: red"> Mensagem enviada, agradecemos seu contato! </p>
			<?php else: ?>
			<div class="row">
				<div class="col-lg-7 card-container">
					<div class="card">
						<div class="card-body">
							<form enctype="multipart/form-data" method="POST" action="inContato.php" name="enviarDados">
								<div class="form-group">
									<label for="inputNome"> Nome: * </label>
									<input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome" name="nome" required="">
								</div>
								<div class="form-group">
									<label for="inputEmail"> Email: * </label>
									<input type="email" class="form-control" id="inputEmail" aria-describedby="notaEmail" placeholder="Digite seu email" required name="email">
									<small id="notaEmail" class="form-text text-muted"> Não iremos compartilhar seu e-mail com ninguém! </small>
								</div>
								<div class="form-group border border-left-0 border-right-0 pt-2 pb-3">
									<label for="inputUsuario"> Nome de Usuário: </label>
									<input type="text" class="form-control" id="inputUsuario" placeholder="Digite seu nome de usuário" name="usuario" required="">
								</div>
								<div class="form-group">
									<label for="selectAssunto"> Assunto: </label>
									<input type="text" class="form-control" id="inputAssunto" placeholder="Digite um assunto" name="assunto" required="">
								</div>
								<div class="form-group">
									<label for="textAreaMensagem"> Mensagem: * </label>
									<textarea class="form-control" id="textAreaMensagem" rows="3" required name="mensagem"></textarea>
								</div>
								<input type="submit" class="btn btn-warning" style="background-color: #f19101;" value="Enviar" name="enviar">
							</form>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
			<section class="pt-5">
				<h2> Onde nos encontramos </h2>
				<p> Rua Padre Alberico, 440 - São Luiz, Formiga - MG, 35570-000 </p>
				<div class="row">
					<div class="col-12 card-container">
						<div id="googleMap" style="width:100%;height:400px;"></div>
					</div>
				</div>
			</section>
		</section>
	</div>
	<!-- Fim dos contatos --> 

	<!-- Rodapé --> 
	<footer class="bg-light text-white mt-4 text-muted rodape">
		<div class="container-fluid p-3 p-md-5">
			<div class="row">
				<div class="col-md-3">
					<h5> BELM Cursos </h5>
				</div>
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
			</div>
			<ul class="rodape-links">
				<li>
					<a href="buscar.php"> Home </a>
				</li>
				<li>
					<a href="sobre.php"> Sobre </a>
				</li>
				<li>
					<a href="contato.php"> Contato</a>
				</li>
			</ul>
			<div class="row">
				<div class="col-md-6"> Designed and built by Luisa Caetano Araújo, Bruno Adriano Alves, Maria Fernanda Baêta Melo Bolina and Mayra Carolina Arantes. 
					<span class="small">
						<br> Trabalho da disciplina de Desenvolvimento Web - 3º ano Informática - BELM Cursos
					</span>
				</div>
				<div class="col-md-3"></div>
				<div class="col-md-3 text-right small align-self-end"> © Copyright 2017 - BELM - Todos os direitos reservados </div>
			</div>
		</div>
	</footer>
	<!-- Fim do Rodapé --> 

	<script src="https://use.fontawesome.com/760f142451.js"></script>
	<script type="text/javascript">
		function deslogar() {
			localStorage.removeItem("usuario"); 
			window.location = "login.php";
		}
	</script>
	<script type="text/javascript">
		function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(-20.4583766, -45.4377692),
                zoom: 16,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-20.4583766, -45.4377692),
                map: map
            });
        }
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7Ao9zE1Qa33VqNHBKflLwn2ewboNkPRE&callback=myMap"></script>
</body>
</html>