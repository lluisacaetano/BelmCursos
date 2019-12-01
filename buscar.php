<?php
	session_start();
	include_once("conn.php");
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

	<!-- Barra de informação -->
    <div class="input-group bg-light pl-4 pt-3 pb-3" id="barraInformacaoTopo">
        <div class="row">
            <div class="d-flex align-items-center text-muted">
                <article class="h6"> Principais Cursos da Belm Cursos </h1>
            </div>
        </div>
    </div>
    <!-- Fim da Barra de Informação -->

	<!-- Início dos Cards --> 
	<div class="container">
		<div class="row">
			<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}

				$result_linguagem = "SELECT * FROM linguagem"; 
				$resultado_linguagem = mysqli_query($conexao, $result_linguagem);
				while($row_linguagem = mysqli_fetch_assoc($resultado_linguagem)){ ?>

				<form  class="col-md-6 card-container d-flex" action="cursos.php" method="post">
					<div class="card efeito-sombreamento">
						<a href="#">
							<img src="<?php echo "./imagens/".$row_linguagem['NOMEIMAGEM']; ?>" class="card-img-top" alt="card image">
						</a>
						<div class="card-body">
							<h4 class="card-title"> <?php echo $row_linguagem['NOMELINGUAGEM']; ?> </h4>
							<h6 class="card-subtitle mb-2 text-muted"> <?php echo $row_linguagem['SUBTITULO']; ?> </h6>
							<article class="descricao-curso">
								<p class="card-text"> <?php echo $row_linguagem['DESCRICAO']; ?> </p>
							</article>
							<?php echo "<a class='btn btn-warning' style='background-color: #f19101; float: left;' href='cursos.php?id=".$row_linguagem['CODLIN']."'>Ver Cursos</a>";?>
						</div>
					</div>
				</form>
			<?php } ?>
		</div>
	</div>
	<!-- Fim dos Cards --> 

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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
