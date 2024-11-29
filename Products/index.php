<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css" type="text/css">
    <link rel="stylesheet" href="./css/layout.css" type="text/css">

    <title>Produtos</title>
</head>

<body>
    <a href="index.php">Menu Principal</a>
    <a href="./pages/cadProd.php">Cadastrar Produto</a>
    <a href="./pages/pesqProd.php">Pesquisar Produto</a>
    <hr>
    <p class="pTitulo">Todos os Produtos</p>
    <hr>
    <?php
    $url = "http://localhost:8080/products";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if ($response === false) {
        $error = curl_error($ch);

        echo 'ERRO na requisição 1';
    } else {
        $data = json_decode($response, true);
        if ($data && is_array($data)) {
            foreach ($data as $product) {
                $id = $product['idProduct'];
                $name = $product['name'];
                $value = $product['value'];
                $imageUrl = $product['image_url'];
                echo '
               <a href="./pages/detalhes.php?id=' . $id . '">
               ';
                echo '
                <img src="./img/' . $imageUrl . '">
                <br>
                ';
                echo "ID: $id<br>";
                echo "Nome: $name<br>";
                echo "Valor: $value<br>";

                $urlRate = "http://localhost:8080/products/" . $id . "/rate";

                $chRate = curl_init();

                curl_setopt($chRate, CURLOPT_URL, $urlRate);

                curl_setopt($chRate, CURLOPT_RETURNTRANSFER, true);

                $responseRate = curl_exec($chRate);

                if ($responseRate === false) {
                    $error = curl_error($chRate);

                    echo 'ERRO na requisição 2 ' . $error;
                } else {
                    $dataRate = json_decode($responseRate, true);
                    if ($dataRate && is_array($dataRate)) {
                        $quantity = $dataRate["quantity"];
                        $allRate = $dataRate["allRate"];
                        if ($quantity == 0 || $allRate == null) {
                            echo 'Avaliação: 0';
                            echo '
                            <hr>
                            ';
                        } else {
                            $media = $allRate / $quantity;
                            echo 'Avaliação: ' . $media;
                            echo '
                            <hr>
                            ';
                        }
                    }
                }

                echo '
                </a>
                ';
            }
        } else {
            echo 'Nenhum dado encontrado';
        }
    }
    ?>

</body>

</html>