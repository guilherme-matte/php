<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ./login.php");
}
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Pids Tech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/layout.css" type="text/css">
    <link rel="stylesheet" href="./css/reset.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="stylesheet" href="./css/menu.css" type="text/css">


</head>

<body id="body">
    <nav id="cabecalhoLateral">
        <nav class="menu">
            <p id="logo"> <a href="./index.php">
                    <img id="logoSenac" src="./img/senac_logo.png" alt="Voltar para Página Principal"
                        title="Menu Principal">
                </a>
            </p>
            <div id="divUsuario">

                <?php
                if (isset($_SESSION["user"]) != "") {
                    echo '
                        <a href="./pages/editarPerfil.php"><img id="usuario" src="./img/usuario.png"
                            alt="Clique para editar o perfil"></a>
                            <br>
                            ';
                    echo '<label id="labelUsuario">' . $_SESSION['user'] . '</label>';
                    echo "
                        <br>
                        ";
                    echo '
                        <a href="./pages/login.php?logout" id="aLogout">Logoff</a>
                        ';
                } else {
                    echo '<a href="./pages/login.php" id="aLogin">Logar</a>';
                }
                ?>
            </div>

            <hr class="hr2">
            <ul>
                <ul>
                    CADASTRO
                    <li>
                    
                    <li>
                        <a href="./pages/cadDoador.php">Doador</a>
                    </li>
                    <li>
                        <a href="./cadDoacao.php">Doação</a>
                    </li>
                    <li>
                        <a href="./pages/cadUsuarios.php">Usuários</a>
                    </li>
                    </li>
                </ul>
                <hr class="hr1">
                <ul>
                    CONSULTA
                    <li>
                    <li>
                        <a href="./pages/conComputadores.php">Computadores</a>
                    </li>
                    <li>
                            <a href="./pages/conDoadores.php">Doadores</a>
                        </li>
                    <li>
                        <a href="./pages/conColaboradores.php">Colaboradores</a>
                    </li>
                    </li>
                </ul>
            </ul>
            <hr class="hr2">

            <div id="sobrenos">

                <a href="./PSG/index.php">Sobre Nós</a>
            </div>
        </nav>
        <div class="linhaVertical"></div>
    </nav>

    <div id="corpo">


        <div id="conteudoPrincipal">
            <!-- CONTEUDO DA PAGINA -->




            <!-- FIM DO CONTEUDO -->
        </div>
    </div>
</body>

</html>