<?php

$n1 = 8;
$n2 = 2;
$n3 = 5;
$n4 = 6;
$n5 = 9;

function media() {
    global $n1, $n2, $n3, $n4, $n5;

    $media = ($n1 + $n2 + $n3 + $n4 + $n5) / 5;
    return $media;
}

function nomeTurmaMedia($nome, $turma) {
    global $n1, $n2, $n3, $n4, $n5;
    echo 'Nome: ', $nome, '<br> Turma: ', $turma,
    '<br> Valor da nota 1: ', $n1,
    '<br> Valor da nota 2: ', $n2,
    '<br> Valor da nota 3: ', $n3,
    '<br> Valor da nota 4: ', $n4,
    '<br> Valor da nota 5: ', $n5,
    '<br> Media: ', media();
}

echo nomeTurmaMedia("Guilherme", 'Inf222');