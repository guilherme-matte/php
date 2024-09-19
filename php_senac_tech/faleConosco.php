<?php
include './conexao.php';
$nomeCompleto = $_POST['nomeCompleto'];
$uf = $_POST['UF'];
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
    . "window.location.href='../../../atividade/pages/faleconosco.html'"
    . "</script>";
    die();
}
$sql = "insert into fale_conosco values (null,'$nomeCompleto','$uf','$cidade','$email','$ddd $telefone','$modalidade','$assunto','$mensagem','$cpf')";
if ($conn->query($sql) === true) {
    echo "<script language='javascript' type='text/javascript'>"
    . "alert('Mensagem enviada com sucesso!');"
    . "window.location.href='../../../atividade/pages/faleconosco.html'"
    . "</script>";
    die();
} else {
    echo "Erro: " . sql . "<br>" . $conn->error;
    echo '<br>';
    echo 'Cadastro nao realizado';
}
$conn->close();
