<?php

/*
  Uma função é um bloco de instruções que podemos usar repetidas vezes em um programa
 */

function msg() {
    echo 'Seja bem vindo no meu sistema <br/>';
}

msg();

function nomeAluno($aluno) {
    echo $aluno, '<br/>';
}

nomeAluno("Guilherme");
nomeAluno("Clotilde");
nomeAluno("Clovis");

echo '<hr>';

function nomeIdade($nome, $idade) {
    echo 'Você digitou o nome: ', $nome, ' e a idade: ', $idade, '<br/>';
}

nomeIdade("Guilherme", 21);
nomeIdade("Clovis", 7);
