<?php

include './conexao.php';

$nomeCompleto = $_POST['nomeCompleto'];

$ddd = $_POST['ddd'];

$telefone = $_POST['telefone'];

$uf = $_POST['UF'];

$cidade = $_POST['cidade'];

$email = $_POST['email'];

$cpf = $_POST['cpf'];

$senha = $_POST['senha'];

$sql = "insert into meu_senac values(null,'$nomeCompleto','$ddd $telefone','$uf','$cidade','$email','$senha','$cpf')";

if ($conn->query($sql) === true) {
    echo "<script language='javascript' type='text/javascript'>"
    . "alert('Cadastro realizado com sucesso');"
    . "window.location.href='../../../atividade/pages/meu_senac.html'"
    . "</script>";
    die();
} else {
    echo "Erro: " . sql . "<br>" . $conn->error;
    echo '<br>';
    echo 'Cadastro nao realizado';
}
$conn->close();
