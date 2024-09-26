<?php

include './conexao.php';
include './Classe/pessoaClasse.php';
$nomeCompleto = $_POST['nomeCompleto'];
$estado = $_POST['UF'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$confirmaEmail = $_POST['confEmail'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone'];
$modalidade = $_POST['modalidade'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$cpf = $_POST['cpf'];

if ($email !== $confirmaEmail) {
    echo "<script language='javascript' type='text/javascript'>"
    . "alert('CAMPOS EMAIL NÃO SÃO IGUAIS!');"
    . "window.location.href='/../atividade/pages/faleconosco.html'"
    . "</script>";
    die();
}

$pessoa = new pessoaClasse();

$pessoa->setNomeCompleto($nomeCompleto);
$pessoa->setEstado($estado);
$pessoa->setCidade($cidade);
$pessoa->setEmail($email);
$pessoa->setFone($ddd . $telefone);
$pessoa->setCpf($cpf);
//----------------------------------------
$pessoa->setAssunto($assunto);
$pessoa->setModalidade($modalidade);
$pessoa->setMensagem($mensagem);

$sql = "insert into fale_conosco values (null,'" . $pessoa->getNomeCompleto() . "','" . $pessoa->getEstado() . "','" . $pessoa->getCidade() . "','" . $pessoa->getEmail() . "','" . $pessoa->getFone() . "','" . $pessoa->getModalidade() . "','" . $pessoa->getAssunto() . "','" . $pessoa->getMensagem() . "','" . $pessoa->getCpf() . "')";

if ($conn->query($sql) === true) {
    echo "<script language='javascript' type='text/javascript'>"
    . "alert('Mensagem enviada com sucesso!');"
    . "window.location.href='../pages/faleconosco.html'"
    . "</script>";
    die();
} else {
    echo "Erro: " . sql . "<br>" . $conn->error;
    echo '<br>';
    echo 'Cadastro nao realizado';
}
$conn->close();
