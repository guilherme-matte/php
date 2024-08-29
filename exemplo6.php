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

/*
 *  O escopo de uma variavel é o cibtexti onde ela foi definida.
 *  A maioria das variáveis do PHP tem somento o escopo local.
 * No PHP, as variaveis globais precisam se declaradas como globais dentro de uma função
 * 
 */
echo '<gr>';

function soma($a) {
    global $b;
    $b = $a + 10;
}

soma(10);
echo 'Valor da soma é: ', $b;
echo '<hr>';

function somaReturn($a) {
    global $b;

    $b = $a + 10;

    return $b;
}

echo 'Valor da soma é: ', somaReturn(10);
echo '<hr>';
$d = 10;
$c = 20;

function calcular() {
    global $c, $d, $e;

    $e = $c + $d;

    return $e;
}

echo calcular();

