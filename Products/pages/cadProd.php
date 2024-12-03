<?php
session_start();


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/layout.css" type="text/css">

    <link rel="stylesheet" href="../css/cadProd.css" type="text/css">
    <title>Cadastrar</title>
</head>

<body>
    <a href="../index.php">Menu Principal</a>
    <a href="cadProd.php">Cadastrar Produto</a>
    <a href="pesqProd.php">Pesquisar Produto</a>
    <hr>
    <p class="pTitulo">Cadastrar produto</p>

    <hr>
    <?php
    if (isset($_SESSION['cadItem'])) {
        if ($_SESSION['cadItem'] == true) {
            echo '
            <div id="produtoCadastrado">Produto cadastrado com sucesso</div>
            ';
        } else {
            echo '
            <div id="produtoNaoCadastrado">Erro ao cadastrar Produto</div>
            ';
        }
    }
    ?>
    <form action="../php/cadastrar.php" method="post" enctype="multipart/form-data">
        <br>
        <label>nome</label>
        <input type="text" name="name">
        <br>
        <label>Valor</label>
        <input type="number" name="value">
        <br>
        <label>imagem</label>
        <input type="file" name="image" accept="image/*">

        <button name="cadastrar">Cadastrar</button>
    </form>
</body>

</html>