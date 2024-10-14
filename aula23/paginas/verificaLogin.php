<?php
include "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE nome = ?");

    $stmt->bind_param("s", $nome);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            session_start();
            $_SESSION['nome_usu_sessao'] = $row['nome'];
            $_SESSION['cargo_usu_sessao'] = $row['cargo'];
            header("Location: ../index.php");
            exit();
        } else {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('não foi possivel realizar o LOGIN! Senha incorreta');"
                . "window.location.href='./login.php'"
                . "</script>";
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>"
            . "alert('Não foi possivel realizar o login, usuário ou senha incorretos!');"
            . "window.location.href='../login.php'"
            . "</script>";
    }
    $stmt->close();
    $conn->close();

}
?>