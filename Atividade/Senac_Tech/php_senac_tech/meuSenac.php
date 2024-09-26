<?php

include '../php_senac_tech/conexao.php';
include '../php_senac_tech/Classe/pessoaClasse.php';
$nomeCompleto = $_POST['nomeCompleto'];

$ddd = $_POST['ddd'];

$telefone = $_POST['telefone'];

$estado = $_POST['UF'];

$cidade = $_POST['cidade'];

$email = $_POST['email'];

$cpf = $_POST['cpf'];

$senha = $_POST['senha'];

$pessoa = new pessoaClasse();

$pessoa->setNomeCompleto($nomeCompleto);

$pessoa->setFone($ddd . $telefone);

$pessoa->setEstado($estado);
$pessoa->setCidade($cidade);
$pessoa->setEmail($email);
$pessoa->setSenha($senha);
$pessoa->setCpf($cpf);
$sql = "insert into meu_senac values(null,'" . $pessoa->getNomeCompleto() . "','" . $pessoa->getFone() . "','" . $pessoa->getEstado() . "','" . $pessoa->getCidade() . "','" . $pessoa->getEmail() . "','" . $pessoa->getSenha() . "','" . $pessoa->getCpf() . "')";

if ($conn->query($sql) === true) {
    echo "<script language='javascript' type='text/javascript'>"
    . "alert('Cadastro realizado com sucesso');"
    . "window.location.href='../pages/meu_senac.html'"
    . "</script>";
    die();
} else {
    echo "Erro: " . sql . "<br>" . $conn->error;
    echo '<br>';
    echo 'Cadastro nao realizado';
}
$conn->close();
