<?php 
	$servidor = "localhost"; 
	$usuario = "root"; 
	$senha = ""; 
	$banco = "belmCursos"; 
	$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
	if(!$conexao){
		die("Falha na conexão: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
 ?>