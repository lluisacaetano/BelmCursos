<?php 
	session_start(); 
	include_once("conn.php");

	$id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
	$nomeLinguagem=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); 
	$subtitulo=filter_input(INPUT_POST, 'subtitulo', FILTER_SANITIZE_STRING); 
	$descricao=filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING); 

	$result_ling="UPDATE linguagem SET NOMELINGUAGEM = '$nomeLinguagem', SUBTITULO = '$subtitulo', DESCRICAO = '$descricao' WHERE CODLIN = '$id'"; 
	$resultado_ling=mysqli_query($conexao, $result_ling); 

	mysqli_query($conexao,$result_ling) or die("[ERRO AO TENTAR EDITAR LINGUAGEM]"); 
	mysqli_close($conexao); 
	header("Location: editarLinguagem.php?msg=sucesso"); 
	
 ?>