<?php 
	include_once("conn.php");

	$nomeCompleto=$_POST['nome'];
	$email=$_POST['email']; 
	$nomeUsuario=$_POST['usuario']; 
	$senha=$_POST['senha']; 
	$telefone=$_POST['telefone']; 
	$endereco=$_POST['endereco']; 
	$idade=$_POST['idade']; 
	$sql="INSERT INTO usuario (NOMECOMPLETO, EMAIL, NOMEUSUARIO, SENHA, TELEFONE, ENDERECO, IDADE) VALUES ('$nomeCompleto', '$email', '$nomeUsuario', '$senha', '$telefone', '$endereco', '$idade')";
	mysqli_query($conexao,$sql) or die("[ERRO AO TENTAR CADASTRAR USUÁRIO]"); 
	mysqli_close($conexao); 
	header("Location: cadastroUsuario.php?msg=sucesso");  
?>
