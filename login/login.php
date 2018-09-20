<!DOCTYPE html>
<html>
	<title>Login</title>
	<?php include ("head.php")?>
<body id="box-login">
	<form action="../index.php">
		<button class="btn" style="background-color: black; color: white;">Home</button>
	</form>
	<div id="box-sig">
		<h2>Login</h2>
		<form method="POST" action="../loginautentic.php">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email:</label>
		    <input type="email" class="form-control size" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com o e-mail" required>
		    <small id="emailHelp" class="form-text text-muted"></small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Senha:</label>
		    <input type="password" class="form-control size" id="exampleInputPassword1" placeholder="Senha" required>
		  </div>
		  <button type="submit" class="btn btn-primary btn-six">Entrar</button>
		</form>
		<p><a href="cadastro.php">Cadastre-se</a></p>
		<p><a href="redsenha.php">Esqueceu sua senha?</a></p>
	</div>

	<script src="../js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	
	
</body>
</html>