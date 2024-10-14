<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar no Sistema</title>
</head>

<body>

    <?php
    if (isset($_SESSION['nome_usu_sessao'])) {
        echo "<a href='index.php?logout'>Logout</a>";
        echo "<a href='#'>" . $_SESSION['nome_usu_sessao'] . "</a>";
        if (isset($_SESSION['nome_usu_sessao']) && isset($_SESSION['cargo_usu_sessao']) === 'ADM') {
            echo "<a href='index.php?logout'>Logout</a>";
            echo "<a href='./paginas/adm.php'>ADMINISTRADOR</a>";
        }
    } else {
        echo "<a href='./cadastro.php'>CADASTRE-SE</a>";

    }
    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: index.php");
    }
    ?>
    <a href="./paginas/cadastro.php">| Cadastro</a>
    <a href="./paginas/login.php">| Login</a>

</body>

</html>