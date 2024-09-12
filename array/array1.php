<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

$nomes = array();
$nomes[0] = $n1;
$nomes[1] = $n2;
$nomes[2] = $n3;

foreach ($nomes as $nomes2) {
    echo 'O nome que escreveu e: ' . $nomes2 . '<br>';
}