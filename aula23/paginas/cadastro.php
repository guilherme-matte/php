<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>

</head>

<body>
    <a href="../index.php">Voltar</a>
    <hr>
    <h1>Cadastro de Usuário</h1>
    <form action="recebeCadastro.php" method="post">

        Nome do Usuário:

        <input type="text" name="nome" id="nome">

        <br>

        E-mail:

        <input type="email" name="email" id="email">

        <br>

        Senha:
        <input type="password" name="senha" id="senha">

        <br>

        <input type="submit" name="enviar">
    </form>
</body>

</html>