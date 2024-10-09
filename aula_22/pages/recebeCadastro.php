<?php
include 'conexao.php';

$login = $_POST['usuario'];
$senha = $_POST['senha'];

$criptografia = hash("sha3-512", $senha);

if ($login == "" || $login == null) {
    echo "<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido!');
    window.location.href='cadastro.php';
    </script>";
    die();
} else {
    if ($senha == "" || $senha == null) {
        echo "<script language='javascript' type='text/javascript'>
        alert('O campo senha deve ser preenchido!');
        window.location.href='cadastro.php';
        </script>";
        die();
    } else {
        $inserir = "INSERT into usuario values(null, '$login','$criptografia' )";
        $executar = mysqli_query($conn, $inserir);
        if ($executar) {
            echo "<script language='javascript' type='text/javascript'>
    alert('Login cadastrado com sucesso!');
    window.location.href='cadastro.php';
    </script>";

        } else {
            echo "<script language='javascript' type='text/javascript'>
            alert('Erro ao cadastrar');
    window.location.href='cadastro.php';
    </script>";

        }
    }

}