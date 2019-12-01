<?php 
	session_start(); 
	include_once("conn.php");

	$id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
	$nomeCurso=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); 
	$subtitulo=filter_input(INPUT_POST, 'subtitulo', FILTER_SANITIZE_STRING); 
	$descricao=filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING); 
	$linguagem=filter_input(INPUT_POST, 'linguagem', FILTER_SANITIZE_STRING); 
	$valor1=filter_input(INPUT_POST, 'valorInicial', FILTER_SANITIZE_NUMBER_INT);
	$valor2=filter_input(INPUT_POST, 'valorPromocional', FILTER_SANITIZE_NUMBER_INT);
	$duracao=filter_input(INPUT_POST, 'duracao', FILTER_SANITIZE_STRING); 

	$result_cur="UPDATE curso SET NOMECURSO = '$nomeCurso', SUBTITULO = '$subtitulo', DESCRICAO = '$descricao', LINGUAGEM = '$linguagem', VALORINICIAL = '$valor1', VALORPROMOCAO = '$valor2', DURACAO = '$duracao' WHERE CODCURSO = '$id'"; 
	$resultado_cur=mysqli_query($conexao, $result_cur); 

	mysqli_query($conexao,$result_cur) or die("[ERRO AO TENTAR EDITAR CURSO]"); 
	mysqli_close($conexao); 
	header("Location: editarCurso.php?msg=sucesso"); 
	
 ?>