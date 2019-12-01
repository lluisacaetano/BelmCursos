<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> BELM Cursos: HTML5, Java, PHP, Banco de Dados e muito mais… </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> 
</head>
<body>
	<section class="fundo-login">
		<div class="containerLogin"> 
			<div>
				<p style="color: red"> 
					<?php if(isset($_SESSION['loginErro'])) {
						echo $_SESSION['loginErro'];
						unset($_SESSION['loginErro']); 
					} ?>
				</p>
				<div class="container-fundo login-sec">
					<h2 align="center">
						BELM Cursos
					</h2>
					<form action="verificaLogin.php" method="POST" class="form-signin">
						<div>
							<label for="usuario"> NOME DE USUÁRIO </label>
							<input type="text" id="inputUsuario" class="form-control" placeholder="" required name="usuario"> <br>
						</div>
						<div>
							<label for="senha"> SENHA </label>
							<input type="password" id="inputSenha" class="form-control" placeholder="" required name="senha"> <br>
						</div>
						<div>
							<button type="submit" class="btn btn-warning" style="background-color: #f19101; float: right;"> Acessar </button>
							<a href="cadastroUsuario.php" class="btn btn-warning" style="background-color: #f19101; float: left;" > Cadastrar </a>
							<br>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html