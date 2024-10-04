<?php

include './conexao.php';
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$criptografia = hash("sha3-512",$senha);

if ($login == "" || $login == null) {

    echo "<scrpt language='javascript' typer='text/javascript'>alert('O campo de Login de ver preenchido');"
    . "winow.location.href='cadastro.php'</script>";
} else {
    if ($senha == "" || $senha == null) {
        echo "<script language='javascript' type='text/javascript'>alert('O campo de senha de ver preenchido');"
        . "window.location.href='cadastrar.php'</script>";
        die();
    } else {
        $inserir = "insert into usuario values(null,'$nome','$login','$criptografia')";
        $executar = mysqli_query($conn, $inserir);
        if ($executar) {
            echo "<script language='javascript' type='text/javascript'>alert('Login realizado com sucesso');"
            . "window.location.href='cadastro.php'</script>";
        } else {
            echo "<script language='javascript' type='text/javascript'>alert('Não foi possivel realizar o cadastro');"
            . "window.location.href='cadastro.php'</script>";
        }
    }
}