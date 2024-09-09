<?php

$num = $_POST['numero'];

if ($num % 2 === 0) {
    echo 'O número ' . $num . ' é PAR';
} else {
    echo 'O número ' . $num . ' é IMPAR';
}    
