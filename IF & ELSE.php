<?php

$n1 = 10;
$n2 = 7;
$n3 = 3;
$n4 = 9;

function media() {
    global $n1, $n2, $n3, $n4;
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media > 7) {
        echo 'Aprovado!';
    } elseif ($media >= 5) {
        echo 'Recuperação!';
    } else {
        echo 'Reprovado!';
    }
}

echo media();
