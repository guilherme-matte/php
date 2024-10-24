<?php

include 'conexaoLogin.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $conn->prepare("SELECT * FROM meu_senac WHERE email = ?");
    $stmt->bind_param("s", $_POST['email']);
    $stmt->execute();



    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($_POST['senha'], $row['senha'])) {
            session_start();

            $nomeFormatado = explode(" ", $row['nomeCompleto']);



            $_SESSION['nome_usu_sessao'] = $nomeFormatado[0] ." ". $nomeFormatado[count($nomeFormatado) - 1];
            $_SESSION['cargo_usu_sessao'] = $row['cargo'];
            header("Location: ../index.php");

            exit();
        } else {
            echo "<script language='javascript' type='text/javascript'>
            alert('Não foi possível realizar o login! Senha incorreta!');
            window.location.href='../pages/login.html';
            </script>";
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>
            alert('Não foi possível realizar o login! Usuário ou Senha incorretos!');
            window.location.href='../pages/login.html';
            </script>";
    }
    $stmt->close();
    $conn->close();
}
?>