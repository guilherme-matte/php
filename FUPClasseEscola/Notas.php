<?php

include './classeNotas.php';
$nome = $_POST['nome'];
$turma = $_POST['turma'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];

$aluno = new Aluno();

$aluno->setNome($nome);
$aluno->setTurma($turma);

$aluno->setN1($n1);
$aluno->setN2($n2);
$aluno->setN3($n3);
$aluno->setN4($n4);
$aluno->setN5($n5);

echo 'Nome do Aluno: ' . $aluno->getNome() . '<br>';
echo 'Turma do Aluno: ' . $aluno->getTurma() . '<br>';

echo 'Primeira nota do Aluno: ' . $aluno->getN1() . '<br>';
echo 'Segunda nota do Aluno: ' . $aluno->getN2() . '<br>';
echo 'Terceira nota do Aluno: ' . $aluno->getN3() . '<br>';
echo 'Quarta nota do Aluno: ' . $aluno->getN4() . '<br>';
echo 'Quinta nota do Aluno: ' . $aluno->getN5() . '<br>';

echo 'Media das notas: ' . $aluno->media() . '<br>';

echo 'Situacao do aluno: '.$aluno->aprovacao();