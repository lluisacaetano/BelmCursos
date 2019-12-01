<?php
  include_once("conn.php");

  $nome=$_POST['nome']; 
  $sobrenome=$_POST['sobrenome']; 
  $usuario=$_POST['usuario']; 
  $email=$_POST['email'];
  $endereco=$_POST['endereco'];
  $pais=$_POST['pais'];
  $estado=$_POST['estado']; 
  $cep=$_POST['cep']; 
  $nomeCartao=$_POST['nomeC']; 
  $numCartao=$_POST['numC']; 
  $dataExpiracao=$_POST['dataE']; 
  $codigo=$_POST['cod'];

  $sql="INSERT INTO checkout (PRIMEIRONOME, SOBRENOME, USUARIO, EMAIL, ENDERECO, PAIS, ESTADO, CEP, NOMECARTAO, NUMCARTAO, DATAEXP, CODSEGURANCA) VALUES ('$nome', '$sobrenome', '$usuario', '$email', '$endereco', '$pais', '$estado', '$cep', '$nomeCartao', '$numCartao', '$dataExpiracao', '$codigo')";
  mysqli_query($conexao, $sql) or die ("[ERRO AO TENTAR CADASTRAR VENDA!]"); 
  mysqli_close($conexao); 
  header("Location: carrinho.php?msg=sucesso"); 
?>