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

$conexao = new conexao();
$cadastro = $conexao->cadastroMeuSenac($pessoa->getNomeCompleto() , $pessoa->getFone() , $pessoa->getEstado(), $pessoa->getCidade() , $pessoa->getEmail() , $pessoa->getSenha(), $pessoa->getCpf());
