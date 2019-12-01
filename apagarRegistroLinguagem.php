<?php
	session_start();
	include_once("conn.php");
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	if(!empty($id)){
		$result_linguagem = "DELETE FROM linguagem WHERE CODLIN='$id'";
		$resultado_linguagem = mysqli_query($conexao, $result_linguagem);
		if(mysqli_affected_rows($conexao)){
			$_SESSION['msg'] = "<p style='color:green;'>Linguagem apagada com sucesso!</p>";
			header("Location: listagemLinguagens.php");
		}else{
			
			$_SESSION['msg'] = "<p style='color:red;'>Erro a linguagem não foi apagada com sucesso! </p>";
			header("Location: listagemLinguagens.php");
		}
	}else{	
		$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar uma linguagem! </p>";
		header("Location: listagemLinguagens.php");
	}
?>
