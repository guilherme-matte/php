<?php

include './conexao2.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$dataNasc = $_POST['dataNasc'];

$sql = "insert into contato values(null,'$nome','$email','$telefone','$dataNasc')";

if ($conn->query($sql) == true) {
    echo "<script language='javascript' type='text/javascript'>"
    . "alert('Cadastro realizado com sucesso');"
    . "window.location.href='exemplo2.html'"
    . "</script>";
    die();
} else {
    echo "Erro: " . sql . "<br>" . $conn->error;
    echo '<br>';
    echo 'Cadastro nao realizado';
}
$conn->close();
