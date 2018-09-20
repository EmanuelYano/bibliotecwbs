<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "usuarios";
	$conexao = mysqli_connect($host, $use, $pass);
	mysqli_select_db($conexao, $banco);
?>
<?php
	session_start();
	if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
		header("Location: login.php");
		exit;
	}else{
		echo "Você esta logado";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel</title>
	<?php include("../head.php") ?>
</head>
<body>
	<form action="sair.php">
		<button class="btn btn-primary"></button>
	</form>
</body>
</html>