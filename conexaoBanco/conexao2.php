<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = "banco001";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Não foi possivel conectar " . $pe->getMessage());
}