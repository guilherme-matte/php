<?php

$host = 'localhost';
$user = 'root';
$password = '';
$banco = 'senac_tech';

$conn = new mysqli($host, $user, $password, $banco);

if ($conn->connect_error) {
    die("Falha na conex�o: " . $conn->connect_error);
}