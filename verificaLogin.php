<?php
	session_start(); 
	include_once("conn.php"); 

	if ((isset($_POST['usuario'])) && (isset($_POST['senha']))) {
		$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']); 
		$senha = mysqli_real_escape_string($conexao, $_POST['senha']); 
		//$senha = md5($senha); 

		$sql = "SELECT * FROM usuario WHERE NOMEUSUARIO = '$usuario' && SENHA = '$senha' LIMIT 1"; 
		$result = mysqli_query($conexao, $sql); 
		$resultado =mysqli_fetch_assoc($result); 

		if (($senha == "admin") && ($usuario == "admin")) {
			header("Location: administrador.php"); 
		} elseif (empty($resultado)) {
			$_SESSION['loginErro'] = "Usuário ou senha incorreto!"; 
			header("Location: login.php"); 
		} elseif (isset($resultado)) {
			header("Location: buscar.php"); 
		} else {
			$_SESSION['loginErro'] = "Usuário ou senha incorreto!"; 
			header("Location: login.php"); 
		}

	} else {
		$_SESSION['loginErro'] = "[ERROR] Usuário ou senha incorreto! Tente novamente..."; 
		header("Location: login.php"); 
	}
?>