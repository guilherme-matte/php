<?php

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$horasTrabalhadas = $_POST['horasTrabalhadas'];
$valorHoraTrabalhada = $_POST['valorHoraTrabalhada'];
$valorVR = $_POST['valorValeRefeicao'];
$valorVT = $_POST['valorValeTransporte'];
$salarioBruto = $horasTrabalhadas * $valorHoraTrabalhada;

echo 'Calculo de Folha de pagamento <br/>';
echo 'Nome do colaborador: ' . $nome . '<br/>';
echo 'Cargo: ' . $cargo . '<br/>';
echo 'Valor do Salario Bruto: ' . $salarioBruto . '<br/>';
echo '<hr/>';

echo 'Valor do VR: ' . $valorVR . '<br/>';
$descontoVR = $valorVR * 0.20;
echo 'Valor do desconto do VR: ' . $descontoVR . '<br/>';

if (($descontoVR * 0.2) > $valorVR) {
    echo 'Valor do DESCONTO do Vale ALIMENTACAO e MAIOR que o beneficio recebido<br/>';
} else {
    echo 'Valor do DESCONTO do Vale ALIMENTACAO e MENOR que o beneficio recebido<br/>';
}

echo '<hr/>';
echo 'Valor do VT: ' . $valorVT . '<br/>';
$descontoVT = $salarioBruto * 0.06;
echo 'Valor do desconto do VT: ' . $descontoVT . '<br/>';

if (($salarioBruto * 0.06) > $valorVT) {
    echo 'Valor do DESCONTO do Vale Transporte e MAIOR que o beneficio recebido! <br/>';
} else {
    echo 'Valor do DESCONTO do Vale Transporte e MENOR que o beneficio recebido! <br/>';
}

echo '<hr/>';

echo 'Valor do DESCONTO do INSS <br/>';
if ($salarioBruto <= 1412) {
    $al = 0.075;
    $parcela = 0;
    $descontoINSS = ($salarioBruto * $al) - $parcela;
} elseif ($salarioBruto > 1412 && $salarioBruto <= 2666.68) {
    $al = 0.09;
    $parcela = 21.18;
    $descontoINSS = ($salarioBruto * $al) - $parcela;
} elseif ($salarioBruto > 2666.68 && $salarioBruto <= 4000.03) {
    $al = 0.12;
    $parcela = 101.18;
    $descontoINSS = ($salarioBruto * $al) - $parcela;
} elseif ($salarioBruto > 4000.04 && $salarioBruto <= 7786.02) {
    $al = 0.14;
    $parcela = 181.18;
    $descontoINSS = ($salarioBruto * $al) - $parcela;
} elseif ($salarioBruto > 7786.02) {
    $al = 0.14;
    $parcela = 181.18;
    $descontoINSS = 908.85;
}

echo 'Aliquota: ' . ($al * 100) . '%<br/>';
echo 'Parcela a deduzir: ' . $parcela . '<br/>';
echo 'Desconto: ' . $descontoINSS . '<br/>';

echo '<hr/>';

echo 'Valor do DESCONTO do IMPOSTO de RENDA: <br/>';
$alIR = 0;
$descontoIR = 0;
if ($salarioBruto > 2112.01 && $salarioBruto <= 2826.66) {
    $alIR = 0.075;
    $descontoIR = ($salarioBruto - $descontoINSS) * $alIR;
} elseif ($salarioBruto > 2826.66 && $salarioBruto <= 3751.06) {
    $alIR = 0.15;
    $descontoIR = ($salarioBruto - $descontoINSS) * $alIR;
} elseif ($salarioBruto > 3751.06 && $salarioBruto <= 4664.68) {
    $alIR = 0.225;
    $descontoIR = ($salarioBruto - $descontoINSS) * $alIR;
} elseif ($salarioBruto > 4664.68) {
    $alIR = 0.275;
    $descontoIR = ($salarioBruto - $descontoINSS) * $alIR;
}

if ($salarioBruto < 2112) {
    echo 'Aliquota: ###ISENTO### <br>';
    echo 'Desconto: ###ISENTO### <br>';
} else {
    echo 'Aliquota: ' . ($alIR * 100) . '%<br/>';
    echo 'Desconto: ' . $descontoIR . '<br/>';
}



echo '<hr/>';
$descontos = ($descontoINSS + ($descontoIR / 12) + $descontoVR + $descontoVT);
echo 'Valor total dos DESCONTOS: ' . $descontos . '<br>';
$total = $salarioBruto - ($descontoINSS + ($descontoIR / 12) + $descontoVR + $descontoVT);
echo 'Salario Liquido: R$' . $total;
