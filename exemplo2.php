<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Meu primeiro programa php</title>
</head>

<body>

    <?php
    $nome = "Guilherme";
    $sobrenome = "Matte";
    $idade = 21;
    $rua = "São Lucas";
    $numero = "69";
    $bairro = "Bom Jesus";
    $cidade = "Porto Alegre";
    $estado = "Rio Grande do Sul";

    echo "<p>Nome completo: $nome $sobrenome</p>";
    echo "<p>$idade anos</p>";
    echo "<p>Endereço: Rua $rua, bairro $bairro, nº $numero</p>";
    echo "<p>Municipio: Cidade $cidade, Estado $estado </p>";
    ?>
</body>

</html>