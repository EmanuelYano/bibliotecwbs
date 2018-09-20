<?php 
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "usuarios";
	$conexao = mysqli_connect($host, $user, $pass);
	mysqli_select_db($conexao, $banco);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Autenticando usuário</title>
		<script type="text/javascript">
			function loginsucces(){
				setTimeout ("window.location='painel.php'", 5000);
			}
			function loginfaill(){
				setTimeout ("window.location='login.php'", 5000);
			}
		</script>
	</head>
	<body>
		<?php
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$sql = mysqli_query("SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'");
			$row = musqli_num_rows($sql);

			if ($row > 0) {
				session_start();
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['senha'] = $_POST['senha'];
				echo "Você está logado!";
				echo "<script> loginsucces() </script>"
			}else{
				echo "Você não esta logado!";
				echo "<script> loginfaill() </script>";
			}
		?>
	</body>
</html>
