<?php
include('conexaoLogin.php');
$login = $_POST['login'];
$senha = $_POST['senha'];

$senhaHash =
    password_hash($senha, PASSWORD_DEFAULT);


$stmt = $conn->prepare("INSERT INTO 
	login VALUES
	(null,?,?,null)");
$stmt->bind_param("ss", $login, $senhaHash);

if ($stmt->execute()) {
    echo "<script language='javascript' type='text/javascript'>
		alert('Cadastro realizado com sucesso!');
		window.location.href='./login.php';
		</script>";
} else {
    echo "<script language='javascript' type='text/javascript'>
		alert('Não foi possível realizar o cadastro!');
		window.location.href='./cadastro.php';
		</script>";
}
$stmt->close();
$conn->close();
?>