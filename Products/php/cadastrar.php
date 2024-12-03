<?php
session_start();
if (isset($_POST['cadastrar'])) {
    // Captura os dados do formulário
    $name = $_POST['name'];
    $value = $_POST['value'];
    $image = $_FILES['image'];

    // Verifica se a imagem foi enviada
    if ($image['error'] === UPLOAD_ERR_OK) {
        $imagePath = $image['tmp_name'];
        $imageName = $image['name'];

        // JSON para o campo "product"
        $productData = json_encode([
            'name' => $name,
            'value' => $value
        ]);

        // Configuração do cURL
        $url = "http://localhost:8080/products";
        $ch = curl_init();

        // Monta o corpo da requisição
        $postData = [
            'product' => $productData, // Envia o JSON
            'image' => curl_file_create($imagePath, mime_content_type($imagePath), $imageName) // Envia o arquivo
        ];

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Executa a requisição
        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        // Verifica a resposta
        if ($response === false) {
            echo  "<script>alert('ERRO AO PROCESSAR REQUISIÇÃO '" . $error . ");</script>";
            header('Location: ../pages/cadProd.php');

            $_SESSION['cadItem'] = false;
        } else {
            header('Location: ../pages/cadProd.php');
            $_SESSION['cadItem'] = true;
        }
    } else {
        echo  "<script>alert('ERRO AO ENVIAR IMAGEM '" . $error . ");</script>";
        header('Location: ../pages/cadProd.php');
        $_SESSION['cadItem'] = false;
    }
}
