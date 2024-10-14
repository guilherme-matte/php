<?php
$nome = $_GET['nome'];

$url = "http://localhost:8080/users/name/" . urlencode($nome);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if ($response === false) {
    $error = curl_error($ch);

    echo "ERRO NA REQUISIÇÃO" . $error;
} else {
    $data = json_decode($response, true);

    //print_r($data);
    if ($data && is_array($data)) {

        foreach ($data as $User) {
            $id = $User['id'];
            $name = $User['name'];
            $email = $User['email'];
            $departmentId = $User['department']['id'];
            $departmentName = $User['department']['name'];

            echo "Usuário id: " . $id . "<br/>";
            echo "Nome: " . $name . "<br/>";
            echo "Email: " . $email . "<br/>";
            echo "Departamento - " . $departmentName;
        }
    }
}
curl_close($ch);
