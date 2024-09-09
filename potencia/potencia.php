<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$pot = $_POST['pot'];

$soma = $num1 + $num2;

echo 'soma é ' . $soma . '<br>';

$resultado = pow($soma, $pot);
echo 'A potencia da soma é ' . $resultado;
