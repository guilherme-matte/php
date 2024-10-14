<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Tela de cadastro</title>
		<meta charset="UTF-8" />
	</head>
<body>
	<a href="../index.php">Voltar</a>
	<hr />
	<h1>Cadastro de usuário</h1>
	<form action="recebeCadastro.php" method="post">
		Nome:
		<input type="text" name="nome" required />
		<br />
		E-mail:
		<input type="email" name="email" required />
		<br />
		Senha:
		<input type="password" name="senha" required />
		<br />
		<input type="submit" value="Cadastro" />
	</form>
</body>	
</html>