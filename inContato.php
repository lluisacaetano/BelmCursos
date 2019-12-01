<?php  
	include_once("conn.php");
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$usuario=$_POST['usuario']; 
	$assuntoContato=$_POST['assunto']; 
	$mensagem=$_POST['mensagem']; 
	$sql="INSERT INTO contato (NOME, EMAIL, USUARIO, ASSUNTO, MENSAGEM) VALUES ('$nome', '$email', '$usuario', '$assuntoContato', '$mensagem')";
	mysqli_query($conexao, $sql) or die ("[ERRO AO TENTAR ENVIAR MENSAGEM!]"); 
	mysqli_close($conexao);  
	header("Location: contato.php?msg=enviado"); 
?>