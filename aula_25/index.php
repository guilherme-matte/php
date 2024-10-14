<?PHP
session_start();
?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<title>CRUD no PHP</title>
	<meta charset="UTF-8" />
</head>

<body>
	<?PHP
	if (isset($_SESSION['nome_usu_sessao'])) {
		echo "<a href='index.php?logout'>Logout</a> | ";
		echo "<a href='#'>"
			. $_SESSION['nome_usu_sessao'] . "</a> | ";

		if (
			isset($_SESSION['nome_usu_sessao']) &&
			($_SESSION['cargo_usu_sessao']) === 'ADM'
		) {
			echo "<a href='paginas/adm.php'>Administrador</a> | ";
		}
	} else {
		echo "<a href='paginas/cadastro.php'>
			Cadastre-se</a>";
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		header("Location: index.php");
	}
	?>
	<hr />
	<a href="./paginas/cadastro.php">Cadastro</a> |
	<a href="./paginas/login.php">Login</a>
	<br />
	Aqui será a página inicial do sistema
</body>

</html>