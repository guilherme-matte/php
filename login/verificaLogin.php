<?php

include './conexao.php';
$login = $_POST['login'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];

$criptografia = hash("sha3-512", $senha);

if (isset($entrar)) {
    $verifica = mysqli_query($conn, "select * from usuario where login = '$login' "
                    . "and senha = '$criptografia'")
            or die("ERRO AO BUSCAR NO BANCO");
    if (mysqli_num_rows($verifica) <= 0) {
        echo "<script language='javascript' type='text/javascript'>alert('Usuario ou senha incorreto');"
        . "window.location.href='cadastrar.php'</script>";
        die();
    } else {
        setcookie("login", $login, time() + 60);
        header("location:login.php");
    }
}
