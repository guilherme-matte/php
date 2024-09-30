<?php

include './conexao.class.php';

$nome = $_POST['nome'];

$raca = $_POST['raca'];

$idade = $_POST['idade'];

$pelo = $_POST['pelo'];

$dono = $_POST['dono'];

$cpf = $_POST['cpf'];

$conexao = new Conexao();
$cadastro = $conexao->Cadastro($nome,$raca,$idade,$pelo,$dono,$cpf);