<?php

$host = 'localhost';
$user = 'root';
$password = '';
$banco = 'banco002';

$conn = new mysqli($host, $user, $password, $banco);

if ($conn->connect_error) {
    die("Falha na conex�o: " . $conn->connect_error);
}