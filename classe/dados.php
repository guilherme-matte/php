<?php

include('./pessoa.php');
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sobrenome = $_POST['sobrenome'];
$nasc = $_POST['nasc'];
$endereco = $_POST['endereco'];

$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

$a = new Pessoa();

$a->setNome($nome);
$a->setSobrenome($sobrenome);
$a->setNasc($nasc);
$a->setEndereco($endereco);
$a->setBairro($bairro);
$a->setCidade($cidade);
$a->setCpf($cpf);
$a->setRg($rg);
$a->setIdade($idade);

echo 'Nome: ' . $a->getNome() . '<br/>';

echo 'Sobrenome: ' . $a->getSobrenome() . '<br/>';

echo 'Idade do aluno: ' . $a->getIdade(). '<br/>';

echo 'Data de Nascimento: ' . $a->getNasc() . '<br/>';

echo 'Endereco: ' . $a->getEndereco() . '<br/>';

echo 'Bairro: ' . $a->getBairro() . '<br/>';

echo 'Cidade: ' . $a->getCidade() . '<br/>';

echo 'CPF: ' . $a->getCpf() . '<br/>';

echo 'RG: ' . $a->getRg() . '<br/>';


