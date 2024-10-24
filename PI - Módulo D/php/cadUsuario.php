<?php

include './usuario.php';
include './conexao.php';
$cadUsuario = new usuario();
$dataCad = date('Y-m-d');

$cadUsuario->setCpf($_POST['cpf']);
$cadUsuario->setNome($_POST['nome']);
$cadUsuario->setSobrenome($_POST['sobrenome']);
$cadUsuario->setTelefone($_POST['telefone']);
$cadUsuario->setEmail($_POST['email']);
$cadUsuario->setEndereco($_POST['endereco']);
$cadUsuario->setCep($_POST['cep']);

$sql = "insert into pessoa_fisica values(null,'" . $cadUsuario->getCpf() . "','" . $cadUsuario->getNome() . "','" . $cadUsuario->getSobrenome() . "','" . $cadUsuario->getEmail() . "','" . $cadUsuario->getEndereco() . "','" . $cadUsuario->getCep() . "','" . $dataCad . "','" . $cadUsuario->getTelefone() . "')";

if ($conn->query($sql) === true) {
    echo "<script language='javascript' type='text/javascript'>"
        . "alert('Cadastro realizado com sucesso!');"
        . "window.location.href='../pages/cadDoacao.html'"
        . "</script>";
    die();
} else {
    echo "Erro: <br>" . $conn->error;
    echo '<br>';
    echo 'Cadastro nao realizado';
}
