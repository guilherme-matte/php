<?php
include 'conexao.php';
$login = $_POST['usuario'];
$senha = $_POST['senha'];

$entrar = $_POST['entrar'];

$criptografia = hash("sha3-512", $senha);

if (isset($entrar)) {
    $verifica = mysqli_query(
        $conn, 
        "SELECT * FROM usuario WHERE login = '$login' and senha = '$criptografia'") 
        or die("Erro ao buscar no banco!");
    if (mysqli_num_rows($verifica) <= 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Não foi possivel realizar login');
    window.location.href='cadastro.php';
    </script>";
        die();
    } else {
        session_start();
        $_SESSION['nome_usu_sessao'] = $login;
        header("location:../index.php");

    }
}