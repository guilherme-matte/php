<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/layout.css" type="text/css">

    <title>Cadastrar</title>
</head>

<body>
    <a href="../index.php">Menu Principal</a>
    <a href="cadProd.php">Cadastrar Produto</a>
    <a href="pesqProd.php">Pesquisar Produto</a>
    <hr>
    <p class="pTitulo">Cadastrar produto</p>

    <hr>
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
    <img src="../img/81d8de13-2f03-4a69-b880-0369fda58d8f.jpg" alt="">
</body>

</html>