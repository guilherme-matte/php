<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = "banco001";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("N�o foi possivel conectar " . $pe->getMessage());
}