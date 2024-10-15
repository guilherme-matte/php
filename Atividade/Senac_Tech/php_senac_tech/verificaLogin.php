<?php

include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conexao = new conexao();
    $stmt = $conexao->conexao()->prepare("SELECT * FROM meu_senac WHERE email = ?");
    var_dump($stmt);
    $stmt->bind_param("s", $_POST['email']);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            session_start();
            $_SESSION['nome_usu_sessao'] = $row['nomeCompleto'];
            $_SESSION['cargo_usu_sessao'] = $row['cargo'];
            header("location: ../index.php");
            exit();
        }else {
            echo "<script language='javascript' type='text/javascript'>
				alert('Não foi possível realizar o login! Senha incorreta!');
				window.location.href='../pages/login.php';
				</script>";
        }
    }else {
        echo "<script language='javascript' type='text/javascript'>
				alert('Não foi possível realizar o login! Usuário ou senha incorreta!');
				window.location.href='./login.php';
				</script>";
    }
    $stmt->close();
    $conn->close();
}