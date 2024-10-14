<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Tela de login</title>
		<meta charset="UTF-8" />
	</head>
<body>
	<a href="../index.php">Voltar</a>
	<hr />
	<h1>Acessar sistema</h1>
	<form action="verificarLogin.php" method="post">
		Nome:
		<input type="text" name="nome" required />
		<br />
		Senha:
		<input type="password" name="senha" required />
		<br />
		<input type="submit" name="entrar" 
		value="Entrar" />
	</form>
	<br />
	<a href="./cadastro.php">Cadastre-se aqui!</a>
</body>	
</html>