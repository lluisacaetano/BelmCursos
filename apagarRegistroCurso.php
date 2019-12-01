<?php
	session_start();
	include_once("conn.php");
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	if(!empty($id)){
		$result_curso = "DELETE FROM curso WHERE CODCURSO='$id'";
		$resultado_curso = mysqli_query($conexao, $result_curso);
		if(mysqli_affected_rows($conexao)){
			$_SESSION['msg'] = "<p style='color:green;'>Curso apagado com sucesso!</p>";
			header("Location: listagemCursos.php");
		}else{
			
			$_SESSION['msg'] = "<p style='color:red;'>Erro o curso não foi apagado com sucesso! </p>";
			header("Location: listagemCursos.php");
		}
	}else{	
		$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um curso! </p>";
		header("Location: listagemCursos.php");
	}
?>
