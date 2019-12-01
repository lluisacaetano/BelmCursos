<?php
	session_start(); 
	include_once("conn.php"); 
	$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$result_cur="SELECT * FROM curso WHERE CODCURSO='$id'"; 
	$resultado_cur=mysqli_query($conexao,$result_cur); 
	$row_cur=mysqli_fetch_assoc($resultado_cur); 
	
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
			<a href="administrador.php" class="navbar-brand" style="color: #fff">
				BELM Cursos
			</a>
			<div class="posicionamento-menu" id="navbarCollapse">
				<ul class="alinhamento-usuario navbar-nav">
					<li>
						<a href="administrador.php" class="nav-link" style="color: #fff;"> Home	</a>
					</li>
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" style="color: #fff"> Inserir </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="cadastroCurso.php" class="dropdown-item"> Curso </a>
							<a href="cadastroLinguagem.php" class="dropdown-item"> Linguagem </a>
						</div>
					</li>
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" style="color: #fff"> Editar </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="listagemCursos.php" class="dropdown-item"> Cursos </a>
							<a href="listagemLinguagens.php" class="dropdown-item"> Linguagens </a>
						</div>
					</li>
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" style="color: #fff"> Histórico de Vendas </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="historicoCliente.php" class="dropdown-item"> Cliente </a>
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


	<!-- Barra de Informação --> 
	<div class="input-group bg-light pl-4 pt-3 pb-3" id="barraInformacaoTopo">
		<div>
			<div class="text-muted">
				<article> Administrador</article>
			</div>
		</div>
	</div>
	<!-- Fim da Barra de Informação --> 

	<!-- Cadastro de Cursos --> 
	<div class="container">
		<section class="jumbotron">
			<h1> Editar Curso </h1>
			<?php if($msg=="sucesso"): ?>
			<p style="color: red"> Curso editado com sucesso! </p>
			<?php else: ?>
			<div class="row">
				<div class="col-lg-7 card-container">
					<div class="card">
						<div class="card-body">
							<form enctype="multipart/form-data" method="POST" action="edCurso.php" name="enviarDados">
								<div class="form-group">
									<input type="hidden" class="form-control" name="id" value="<?php echo $row_cur['CODCURSO']; ?>">
									<label for="inputNome"> Nome do Curso: * </label>
									<input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome" required name="nome" value="<?php echo $row_cur['NOMECURSO']; ?>" >
								</div>
								<div class="form-group">
									<label for="inputSubtitulo"> Subtítulo: * </label>
									<input type="text" class="form-control" id="inputSubtitulo" placeholder="Digite o subtítulo" required name="subtitulo" value="<?php echo $row_cur['SUBTITULO']; ?>">
								</div>
								<div class="form-group">
									<label for="textAreaDescricao"> Descrição: * </label>
									<textarea class="form-control" id="textAreaDescricao" rows="3" required name="descricao"> <?php echo $row_cur['DESCRICAO']; ?> </textarea>
								</div>
								<div class="form-group border border-left-0 border-right-0 pt-2 pb-3">
									<label for="selectAssunto"> Linguagem: </label>
									<input type="text" class="form-control" id="inputLinguagem" placeholder="Digite a linguagem" required name="linguagem" value="<?php echo $row_cur['LINGUAGEM']; ?>" >
								</div>
								<div class="form-group">
									<label for="inputValor"> Valor Incial: * </label>
									<input type="text" class="form-control" id="inputValor" placeholder="Insira um valor inteiro" required name="valorInicial" value="<?php echo $row_cur['VALORINICIAL']; ?>" onkeyup="somenteNumeros(this);" maxlength="4">
								</div>
								<div class="form-group">
									<label for="inputPromocao"> Desconto: * </label>
									<input type="text" class="form-control" id="inputPromocao" placeholder="Insira um valor inteiro" required name="valorPromocional" value="<?php echo $row_cur['VALORPROMOCAO']; ?>" onkeyup="somenteNumeros(this);" maxlength="4">
								</div>
								<div class="form-group border border-left-0 border-right-0 pt-2 pb-3">
									<label for="inputDuracao"> Duração: *</label>
									<input type="text" class="form-control" id="inputPromocao" placeholder="Digite a duração do curso" required name="duracao" value="<?php echo $row_cur['DURACAO']; ?>" onkeyup="somenteNumeros(this);" maxlength="2"> 
								</div>
								<small id="notaAnexo" class="form-text text-muted" > Não é possível alterar a imagem! </small>
								<input type="submit" class="btn btn-warning" style="background-color: #f19101; float: right;" name="enviar" value="Salvar" >
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
					<a href="administrador.php"> Mensagens </a>
				</li>
				<li>
					<a href="historicoCliente.php"> Histórico de Vendas </a>
				</li>
			</ul>
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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>