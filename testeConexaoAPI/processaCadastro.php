<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$dept = $_POST['dept'];


$data = array("name" => $nome, "email" => $email, "department" => array("id" => 1));

$json = json_encode($data);
$url = "http://localhost:8080/users";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Content-length: " . strlen($json)));

$response = curl_exec($ch);

if ($response === false) {
    echo "ERRO: " . curl_error($ch);
} else {
    echo "Resposta da API: " . $response;
};

curl_close($ch);
