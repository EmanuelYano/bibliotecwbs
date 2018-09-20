<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando...</title>
</head>
<body>
	<?php
		$host = "localhost";
		$user = "root"
		$pass = "";
		$banco = "db_book";
		$conexao = mysqli_connect($host, $user, $pass);
		mysqli_select_db ($conexao, $banco);

		$livro = $_POST['nomeLivro'];
		$autor = $_POST['autor'];
		$editora = $_POST['editora'];
		$genero = $_POST['genero'];
		$sql = "INSERT INTO books (id, livro, autor, editora, genero) VALUES (' ', '$livros', '$autor', '$editora', '$genero')";
		$sql = mysqli_query($conexao, $sql);
	?>
</body>
</html>