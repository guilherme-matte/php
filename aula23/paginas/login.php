<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <a href="../index.php">Voltar</a>
    <h1>Acessar Sistema</h1>
    <form action="verificaLogin.php" method="post">

        Nome:

        <input type="text" name="nome" id="nome" required>

        <br>



        Senha:
        <input type="password" name="senha" id="senha" required>

        <br>

        <input type="submit" name="enviar">
    </form>
</body>

</html>