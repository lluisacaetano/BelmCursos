<?php
	$msg=0;
	@$msg=$_REQUEST['msg'];
?>
<!DOCTYPE html>
<html>
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
			<a href="login.php" class="navbar-brand" style="color: #fff">
				BELM Cursos
			</a>
			<div class="posicionamento-menu" id="navbarCollapse">
				<ul class="navbar-nav" style="float: right;">
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="dropdownUsuario" role="button" data-toggle="dropdown" style="color: #fff"> Voltar </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="float: right;">
							<a class="dropdown-item" href="login.php">Login</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Fim do Cabeçalho --> 

	<!--Cadastro de Usuários --> 
	<div class="container">
		<section class="jumbotron">
			<h1> Registre-se </h1>
			<p> Se você já possui cadastro em nosso site, faça o login ao lado! Se ainda não fez seu cadastro, preencha seus dados abaixo: </p>
			<?php if($msg=="sucesso"): ?>
			<p style="color: red"> Usuário cadastrado com sucesso, agradecemos sua visita! </p>
			<?php else: ?>
			<div class="row">
				<div class="col-lg-7 card-container">
					<div class="card">
						<div class="card-body">
							<form enctype="multipart/form-data" method="POST" action="inUsuario.php" name="enviarDados">
								<div class="form-group">
									<label for="inputNome"> Nome Completo: * </label>
									<input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome" required name="nome">
								</div>
								<div class="form-group">
									<label for="inputEmail"> Email: * </label>
									<input type="email" class="form-control" id="inputEmail" aria-describedby="notaEmail" placeholder="Digite seu email" required name="email">
									<small id="notaEmail" class="form-text text-muted"> Não iremos compartilhar seu e-mail com ninguém! </small>
								</div>
								<div class="form-group border border-left-0 border-right-0 pt-2">
									<label for="inputUsuario"> Nome de Usuário: *</label>
									<input type="text" class="form-control" id="inputUsuario" placeholder="Digite seu nome de usuário" required name="usuario">
								</div>
								<div class="form-group">
									<label for="inputSenha"> Senha: *</label>
									<input type="password" class="form-control" id="inputSenha" placeholder="Digite sua senha" required name="senha">
								</div>
								<div class="form-group border border-left-0 border-right-0 pt-2">
									<label for="inputTelefone"> Telefone: *</label>
									<input type="tel" class="form-control" id="inputTelefone" placeholder="Digite seu telefone" required name="telefone" onkeyup="somenteNumeros(this);" maxlength="10">
								</div>
								<div class="form-group">
									<label for="inputEndereco"> Endereço: * </label>
									<input type="text" class="form-control" id="inputEndereco" placeholder="Digite seu endereço" required name="endereco">
								</div>
								<div class="form-group">
									<label for="inputIdade"> Idade: * </label>
									<input type="text" class="form-control" id="inputIdade" placeholder="Digite sua idade" required name="idade" onkeyup="somenteNumeros(this);" maxlength="2">
								</div>
								<input type="submit" class="btn btn-warning" style="background-color: #f19101; float: right;" value="Cadastrar">
							</form>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		</section>
	</div>
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
					<a href="login.php"> Login </a>
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
	<script>
	    function somenteNumeros(num) {
	        var er = /[^0-9.]/;
	        er.lastIndex = 0;
	        var campo = num;
	        if (er.test(campo.value)) {
	          campo.value = "";
	        }
	    }
 	</script>
	<script src="https://use.fontawesome.com/760f142451.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7Ao9zE1Qa33VqNHBKflLwn2ewboNkPRE&callback=myMap"></script>
</body>
</html>