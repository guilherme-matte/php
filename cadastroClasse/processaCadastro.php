<?php

include './conexao.php';
include './classe.php';
$nomeCompleto = $_POST['nomeCompleto'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$dataNasc = $_POST['dataNasc'];
$estado = $_POST['uf'];

$a = new Cadastrar();
$a->setNomeCompleto($nomeCompleto);
$a->setEmail($email);
$a->setTelefone($telefone);
$a->setDataNasc($dataNasc);
$a->setEstado($estado);

$sql = "insert into cadastro values(null,'" . $a->getNomeCompleto() . "','" . $a->getEmail() . "','" . $a->getTelefone() . "','" . $a->getDataNasc() . "','" . $a->getEstado() . "')";
var_dump($sql);
if ($conn->query($sql) === true) {
    echo "<script language='javascript' type='text/javascript'>"
    . "alert('Cadastro realizado com sucesso');"
    . "window.location.href='cadastro.html'"
    . "</script>";
    die();
} else {

    echo "Erro: " . sql . "<br>" . $conn->error;
    echo '<br>';
    echo 'Cadastro nao realizado';
}
