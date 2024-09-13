<?php

include './Calculadora.php';
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

$calc = new Calcular();

$calc->setValor1($valor1);
$calc->setValor2($valor2);

echo 'Resultado da Soma: ' . $calc->soma() . '<br>';
echo 'Resultado da Subtração: ' . $calc->subtrair() . '<br>';
echo 'Resultado da Multiplicação: ' . $calc->multi() . '<br>';
echo 'Resultado da Divisão: ' . $calc->div() . '<br>';
