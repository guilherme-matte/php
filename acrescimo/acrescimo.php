<?php

$valor = $_POST['valor'];
$diasAtraso = $_POST['diasAtraso'];
$juros = $_POST['jurosMensal'];



$total = $valor + ($valor * ($juros / 100) * ($diasAtraso / 30) );
echo 'Valor total da prestaчуo R$: ' . $total;
