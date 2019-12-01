<?php
  session_start();
  include_once("conn.php");

  $msg=0;
  @$msg=$_REQUEST['msg'];
?>
<!DOCTYPE html>
<html>
<head>
	<title> BELM Cursos: HTML5, Java, PHP, Banco de Dados e muito mais… </title>
	<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
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
	<?php 
	$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$result_ling="SELECT * FROM linguagem WHERE CODLIN='$id'"; 
	$resultado_ling=mysqli_query($conexao,$result_ling); 
	$row_ling=mysqli_fetch_assoc($resultado_ling); ?>
    <div class="input-group bg-light pl-4 pt-3 pb-3" id="barraInformacaoTopo">
        <div class="row">
            <div class="d-flex align-items-center text-muted">
                <h1 class="h6"> <?php echo $row_ling['SUBTITULO']; ?> </h1>
            </div>
        </div>
    </div>
    <!-- Fim da Barra de Informação -->

    <!-- Cards --> 
    <div class="container">
        <div class="row">
        	<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
	            $result_cur="SELECT * FROM curso where LINGUAGEM='$id'";
	            $resultado_cur = mysqli_query($conexao, $result_cur);
				while($row_curso = mysqli_fetch_assoc($resultado_cur)){  ?>
            <form  class="col-md-6 col-lg-4 card-container d-flex" action="carrinho.php" method="post">
            	<div class="card efeito-sombreamento">
	                <a href="#">
	                    <img class="card-img-top" src="<?php echo "./imagens/produtos/".$row_curso['NOMEIMAGEM']; ?>" alt="card image">
	                </a>
	                <div class="card-body">
	                    <h4 class="card-title"> <?php echo $row_curso['NOMECURSO']; ?> </h4>
	                    <article class="descricao-produto">
	                        <p class="card-text"> <?php echo $row_curso['DESCRICAO']; ?> </p>
	                    </article>
	                    <div class="card-block d-flex align-items-center">
	                        <div class="ml-auto text-right">
	                        	<span class="preco-antes">
	                        		R$ <?php echo $row_curso['VALORINICIAL']; ?>,00
	                        	</span>
	                            <span class="preco-agora">
	                                R$ <?php echo $row_curso['VALORINICIAL'] - $row_curso['VALORPROMOCAO']; ?>,00
	                            </span>
	                        </div>
	                    </div>
	                    <?php echo "<a class='btn btn-warning' style='background-color: #f19101; float: left;' href='carrinho.php?id=".$row_curso['CODCURSO']."'>Comprar</a>";?>
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
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>