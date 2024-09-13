<?php

include './Calculadora.php';
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$operacao = $_POST['operacao'];

$calc = new Calcular();

$calc->setValor1($valor1);
$calc->setValor2($valor2);
$calc->setOperacao($operacao);
/*
switch ($operacao) {
    case "+":
        echo 'Resultado do calculo: ' . $calc->soma() . '<br>';

        break;
    case "-":
        echo 'Resultado da Subtração: ' . $calc->subtrair() . '<br>';
        break;
    case "*":
        echo 'Resultado da Multiplicação: ' . $calc->multi() . '<br>';

        break;
    case "/":
        echo 'Resultado da Divisão: ' . $calc->div() . '<br>';

        break;
}
*/
echo 'Mostrando o resultado da operação matematica: '.$calc->operacao();


