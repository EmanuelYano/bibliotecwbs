<!DOCTYPE html>
<html>
	<title>Cadastre-se</title>
	<script type="text/javascript">
		function valSenha() {
			var senha = user.senha.value;
			var confS = user.confSenha.value;

			if (senha == " " || senha.length <= 5){
				alert("Preencha o campo senha com no mínimo 6 caracteres!");
				user.senha.focus;
				return false;
			}
			if (confS == " " || confS.length <= 5){
				alert("Preencha o campo senha com no mínimo 6 caracteres!");
				user.confS.focus;
				return false;
			}
			if (senha != confS){
				alert("As senhas são diferentes, digite novamente!");
				user.senha.focus;
				return false;
			}			
		}		
	</script>
	<?php include ("head.php")?>
<body id="box-reg">
	<?php include ("menu-all.php")?>
	<div id="cdst">
		<h1>Cadastre-se</h1>
		<form method="POST" action="cadastrando.php" nome="user" >	
			<label>
				Nome: <input type="text" name="nome" required class="form-control size"> 
			</label>
			<label>
				Sobrenome: <input type="text" name="snome" required class="form-control size">
			</label>
			<label>
				Códgo do aluno: <input type="number" name="cda" required class="form-control size">
			</label>
			<label>
				Telefone: <input type="number" name="nt" required class="form-control size">
			</label>
			<label>
				Serie: <input type="number" name="serie" required class="form-control size">			
			</label>
			<label>
				E-mail: <input type="email" name="email" required class="form-control size">
			</label>
			<label>
				Senha: <input type="password" name="senha" required class="form-control size pass">
			</label>
			<label>
				Confirme a senha: <input type="password" name="confSenha" required class="form-control size pass">
			</label>
			<button type="submit" class="btn btn-pimary btn-five" onclick="valSenha()">Cadastrar</button>
		</form>
	</div>
	<div id="login">
		<p style="padding-top: 20px;">Para a realização do cadastro você precisa estudar na Escola Estadual Waldemir Barros da Silva.</p>
		<p>Todos os seus dados serão verificados.</p>

		<h1>Você ja possui login?</h1>
		<p style="text-align: center; font-size: 35px;"><a href="login.php">Clique Aqui</a></p>

		<p style="text-align: center; font-size: 20px;"><a href="#">Leia o regulamento</a></p>
	</div>
</body>
</html>