<?php
  session_start();
  include_once("conn.php");

  $msg=0;
  @$msg=$_REQUEST['msg'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title> BELM Cursos: HTML5, Java, PHP, Banco de Dados e muito mais… </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Estilos customizados para esse template -->
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body class="bg-light">
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
  
	<div class="container">
    	<div class="py-5 text-center">
        	<h2> Formulário de checkout </h2>
          <?php if($msg=="sucesso"): ?>
          <p style="color: green"> Venda realizada com sucesso! </p>
          <?php else: ?>
          <?php 
            $id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            $result_cur="SELECT * FROM curso WHERE CODCURSO='$id'"; 
            $resultado_cur=mysqli_query($conexao,$result_cur); 
            $row_cur=mysqli_fetch_assoc($resultado_cur); ?>
        	<p class="lead"> Não perca tempo! Finalize sua compra agora e garanta as melhores ofertas. </p> 
        </div>
        <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        	<h4 class="d-flex justify-content-between align-items-center mb-3">
            	<span style="color: #13505B">Resumo da compra</span>
          	</h4>
          	<ul class="list-group mb-3">
            	<li class="list-group-item d-flex justify-content-between lh-condensed">
            		<div>
                		<h6 class="my-0"><?php echo $row_cur['NOMECURSO']; ?></h6>
            			<small class="text-muted"><?php echo $row_cur['SUBTITULO']; ?></small>
            		</div>
            		<span class="text-muted">R$ <?php echo $row_cur['VALORINICIAL']; ?>,00</span>
            	</li>
            	<li class="list-group-item d-flex justify-content-between bg-light">
              		<div class="text-success">
                		<h6 class="my-0">Desconto</h6>
                		<small>Promoção da loja </small>
              		</div>
              		<span class="text-success">-R$ <?php echo $row_cur['VALORPROMOCAO']; ?>,00</span>
            	</li>
            	<li class="list-group-item d-flex justify-content-between">
              		<span>Total (BRL)</span>
              		<strong>R$ <?php echo $row_cur['VALORINICIAL'] - $row_cur['VALORPROMOCAO']; ?>,00</strong>
            	</li>
          	</ul>
        	<form class="card p-2">
            	<div class="input-group">
            		<input type="text" class="form-control" placeholder="Código Promocional">
              		<div class="input-group-append">
                		&nbsp; <a class="btn btn-secondary">Resgatar</a>
            		</div>
            	</div>
        	</form>
    	</div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3" style="color: #13505B" >Endereço de cobrança</h4>
            <form enctype="multipart/form-data" method="POST" action="inCheckout.php" name="enviarDados">
            <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="primeiroNome">Nome</label>
                  <input type="text" class="form-control" id="primeiroNome" placeholder="Primeiro nome" name="nome" required>
                  <div class="invalid-feedback">
                      Insira um nome válido!
                  </div>
                </div>
              <div class="col-md-6 mb-3">
                  <label for="sobrenome">Sobrenome</label>
                  <input type="text" class="form-control" id="sobrenome" placeholder="" value="" required name="sobrenome">
                  <div class="invalid-feedback">
                      Insira um sobrenome válido!
                  </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="nickname">Nome de Usuário</label>
                <input type="text" class="form-control" id="nickname" placeholder="Nickname" value="" required name="usuario">
                  <div class="invalid-feedback">
                      Insira um nome de usuário válido!
                  </div>
            </div>
            <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Opcional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="fulano@exemplo.com" name="email">
                <div class="invalid-feedback">
                  Insira um endereço de e-mail válido para atualizações de entrega!
                </div>
            </div>
            <div class="mb-3">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" id="endereco" placeholder="Rua e número" required name="endereco">
              <div class="invalid-feedback">
                Insira seu endereço de entrega!
              </div>
            </div>
            <div class="row">
                <div class="col-md-5 mb-3">
                  <label for="pais">País</label>
                  <input type="text" class="form-control" id="pais" required placeholder="Nome Completo ou sigla" name="pais">
                </div>
              <div class="col-md-4 mb-3">
                  <label for="estado">Estado</label>
                  <input type="text" class="form-control" id="estado" placeholder="Nome completo ou sigla" required name="estado">
              </div>
                <div class="col-md-3 mb-3">
                  <label for="cep">CEP</label>
                  <input type="text" class="form-control" id="cep" placeholder="Separado por hífen" required name="cep">
                  <div class="invalid-feedback">
                      Insira um endereço de CEP válido!
                  </div>
                </div>
            </div>
            <hr class="mb-4">
            <h4 class="mb-3 " style="color: #13505B">Pagamento</h4>
            <div class="row">
              <div class="col-lg-6">
                <div class="input-group d-block my-3">
                  <span class="custom-radio">
                   <input type="radio" id="radio" name="buttonRadio">
                  </span>
                  <label class="custom-control-label" for="credito" id="radioC">Cartão de Crédito</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-group d-block my-3">
                  <span class="custom-radio">
                   <input type="radio" id="radio" name="buttonRadio">
                  </span>
                  <label class="custom-control-label" for="debito" id="radioD">Cartão de Débito</label>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-nome">Nome no Cartão</label>
                  <input type="text" class="form-control" id="cc-nome" placeholder="" required name="nomeC">
                  <small class="text-muted">Nome completo, como mostrado no cartão!</small>
                  <div class="invalid-feedback">
                     Insira o nome do cartão!
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-numero">Número do Cartão</label>
                  <input type="text" class="form-control" id="cc-numero" placeholder="" required name="numC" onkeyup="somenteNumeros(this);" maxlength="16">
                  <div class="invalid-feedback">
                      Insira o número do cartão!
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-expiracao">Data de Expiração</label>
                  <input type="text" class="form-control" id="cc-expiracao" placeholder="" required name="dataE">
                  <div class="invalid-feedback">
                      Insira a data de expiração!
                  </div>
              </div>
                <div class="col-md-3 mb-3">
                  <label for="cc-cvv">Código de Segurança</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required name="cod" keyup="somenteNumeros(this);" maxlength="3">
                  <div class="invalid-feedback">
                      Insira o código de segurança!
                  </div>
                </div>
            </div>
            <hr class="mb-4">
            <input type="submit" class="btn btn-lg btn-block btn-warning" style="background-color: #f19101;" name="enviar" value="Finalizar Compras" >
          </form>
      </div>
    </div>
    </form>
    <?php endif; ?>
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
     
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          var forms = document.getElementsByClassName('needs-validation');

          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
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
