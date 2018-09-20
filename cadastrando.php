<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando...</title>
</head>
<body>
	<?php
		$host = "localhost";
		$user = "root";
		$pass = "";
		$banco = "usuarios";
		$conexao = mysqli_connect("$host", "$user", "$pass");
		mysqli_select_db($conexao, $banco) ;	
	
		$nome = $_POST['nome'];
		$snome = $_POST['snome'];
		$cda = $_POST['cda'];
		$nt = $_POST['nt'];
		$serie = $_POST['serie'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$sql = "INSERT INTO cadastro (nome, sobrenome, codigo, telefone, serie, email,senha, id) VALUES ('$nome', '$snome', $cda, $nt, $serie, '$email', '$senha', ' ')";
		$sql = mysqli_query($conexao, $sql);
	?>
</body>
</html>