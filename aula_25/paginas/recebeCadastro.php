<?php
	include('conexao.php');
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$senhaHash = 
	password_hash($senha, PASSWORD_DEFAULT);
	
	if(empty($nome) || empty($email) || 
	empty($senha)){
		echo "<script language='javascript' type='text/javascript'>
		alert('Todos os campos devem ser preenchidos!');
		window.location.href='./cadastro.php';
		</script>";
		die();
	}
	$stmt = $conn->prepare("INSERT INTO 
	usuarios(nome,email,senha)VALUES
	(?,?,?)");
	$stmt->bind_param("sss",$nome,$email,$senhaHash);
	
	if($stmt->execute()){
		echo "<script language='javascript' type='text/javascript'>
		alert('Cadastro realizado com sucesso!');
		window.location.href='./login.php';
		</script>";
	}else{
		echo "<script language='javascript' type='text/javascript'>
		alert('Não foi possível realizar o cadastro!');
		window.location.href='./cadastro.php';
		</script>";
	}
	$stmt->close();
	$conn->close();
?>