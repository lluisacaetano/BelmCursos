<?php 
	include_once("conn.php");

	$nomeLinguagem=$_POST['nome'];
	$subtitulo=$_POST['subtitulo']; 
	$descricao=$_POST['desc'];
	$nomeimagem=$_FILES['arquivo']['name']; 
	$temp=$_FILES['arquivo']['tmp_name']; 
	$sql="INSERT INTO linguagem ( NOMELINGUAGEM, SUBTITULO, DESCRICAO, NOMEIMAGEM, DATAIMAGEM) VALUES ('$nomeLinguagem', '$subtitulo', '$descricao', '$nomeimagem', NOW())";
	mysqli_query($conexao,$sql) or die("[ERRO AO TENTAR CADASTRAR LINGUAGEM]");  
	mysqli_close($conexao); 
	move_uploaded_file($temp, "./imagens/".$nomeimagem);
	header("Location: cadastroLinguagem.php?msg=sucesso"); 
 ?>
