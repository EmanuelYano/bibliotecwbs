<!DOCTYPE html>
<html>
<head>
	<title>Cadastre os livros</title>
	<?php include("../head.php") ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-8">
				<form method="POST" >
					<input type="text" name="nomeLivro">
					<input type="text" name="autor">
					<input type="text" name="editor">
					<input type="text" name="genero">
					<button class="btn btn-primary">Cadastrar</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>