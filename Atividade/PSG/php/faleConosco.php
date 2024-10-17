<?php

include '../../Senac_Tech/php_senac_tech/conexao.php';
include '../../Senac_Tech/php_senac_tech/Classe/pessoaClasse.php';
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dataNasc = $_POST['datanasc'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$obs = $_POST['obs'];

$pessoa = new pessoaClasse();

$pessoa->setNome($nome);
$pessoa->setSobrenome($sobrenome);
$pessoa->setDataNasc($dataNasc);
$pessoa->setEndereco($endereco);
$pessoa->setBairro($bairro);
$pessoa->setCidade($cidade);
$pessoa->setEstado($estado);
$pessoa->setSexo($sexo);
$pessoa->setFone($telefone);
$pessoa->setEmail($email);
$pessoa->setUsuario($usuario);
$pessoa->setSenha($senha);
//----------------------------------------
$pessoa->setMensagem($obs);

$conexao = new conexao();

$conexao->cadastroFaleConoscoPSG($pessoa->getNome(),$pessoa->getSobrenome(),$pessoa->getDataNasc(),$pessoa->getEndereco(),$pessoa->getBairro(),$pessoa->getCidade(),$pessoa->getEstado(),$pessoa->getSexo(),$pessoa->getFone(),$pessoa->getEmail(),$pessoa->getUsuario(),$pessoa->getSenha(),$pessoa->getMensagem());