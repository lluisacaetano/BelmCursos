<?php
	include_once("conn.php"); 

	$nomeCurso=$_POST['nome']; 
	$subtituloCurso=$_POST['subtitulo']; 
	$descricaoCurso=$_POST['descricao']; 
	$linguagemCurso=$_POST['linguagem'];
	$valor1=$_POST['valorInicial']; 
	$valor2=$_POST['valorPromocional']; 
	$duracaoCurso=$_POST['duracao']; 
	$nomeImagem=$_FILES['arquivo']['name'];
	$temp=$_FILES['arquivo']['tmp_name']; 

	$sql="INSERT INTO curso (NOMECURSO, SUBTITULO, DESCRICAO, LINGUAGEM, VALORINICIAL, VALORPROMOCAO, DURACAO, NOMEIMAGEM,  DATAIMAGEM) VALUES ('$nomeCurso', '$subtituloCurso', '$descricaoCurso', '$linguagemCurso', '$valor1', '$valor2', '$duracaoCurso', '$nomeImagem', NOW())"; 
	mysqli_query($conexao, $sql) or die ("[ERRO AO TENTAR CADASTRAR CURSO!]"); 
	mysqli_close($conexao); 
	move_uploaded_file($temp, "./imagens/produtos/".$nomeImagem); 
	header("Location: cadastroCurso.php?msg=sucesso"); 

?>
