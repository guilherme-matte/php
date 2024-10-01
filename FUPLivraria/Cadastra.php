<?php
$titulo = $_POST['titulo'];

$edicao = $_POST['edicao'];

$tema = $_POST['tema'];

$numPaginas = $_POST['numPaginas'];

$anoPublicacao = $_POST['anoPublicacao'];

var_dump($tema);
include './conexao.class.php';
$conexao = new Conexao();
$cadastro = $conexao->Cadastro($titulo,$edicao,$tema,$numPaginas,$anoPublicacao);