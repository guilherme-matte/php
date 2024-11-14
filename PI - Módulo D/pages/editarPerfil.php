<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ./login.php");
}
function deslogar()
{
    if (session_destroy()) {
        header("Location: login.php");
    }
}

if (isset($_GET["logout"])) {
    deslogar();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pids Tech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/layout.css" type="text/css">
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/menu.css" type="text/css">
    <link rel="stylesheet" href="../css/formCadUsuario.css" type="text/css">

</head>

<body id="body">
    <div id="corpo">
        <nav id="cabecalhoLateral">
            <nav class="menu">
                <p id="logo"> <a href="../index.php">
                        <img id="logoSenac" src="../img/senac_logo.png" alt="Voltar para Página Principal"
                            title="Menu Principal">
                    </a>
                </p>
                <div id="divUsuario">

                    <?php
                    if (isset($_SESSION["user"]) != "") {
                        echo '
                        <a href="editarPerfil.php"><img id="usuario" src="../img/usuario.png"
                            alt="Clique para editar o perfil" title="Editar Perfil"></a>
                            <br>
                            ';
                        echo '<label id="labelUsuario">' . $_SESSION['user'] . '</label>';
                        echo "
                        <br>
                        ";
                        echo '
                        <a href="login.php?logout" id="aLogout">Logoff</a>
                        ';
                    } else {
                        echo '<a href="login.php" id="aLogin">Logar</a>';
                    }
                    ?>
                </div>
                <hr class="hr2">
                <ul>
                    <ul>
                        CADASTRO
                        <li>
                        <li>
                            <a href="./cadDoador.php">Doador</a>
                        </li>
                        <li>
                            <a href="./cadDoacao.php">Doação</a>
                        </li>
                        <li>
                            <a href="./cadUsuarios.php">Usuários</a>
                        </li>
                        </li>
                    </ul>
                    <hr class="hr1">
                    <ul>
                        CONSULTA
                        <li>
                        <li>
                            <a href="./conComputadores.php">Computadores</a>
                        </li>
                        <li>
                            <a href="./conDoadores.php">Doadores</a>
                        </li>
                        <li>
                            <a href="./conColaboradores.php">Colaboradores</a>
                        </li>
                        </li>
                    </ul>
                </ul>
                <hr class="hr2">

                <div id="sobrenos">


                    <a href="../PSG/index.php">Sobre Nós</a>
                </div>
            </nav>
            <div class="linhaVertical"></div>
            <div id="cabecalhoSuperior">
                <div id="cabecalhoSuperiorEsq">
                    <p>Pesquisar</p>
                </div>
                <div id="cabecalhoSuperiorMeio"><input id="inputPesquisa" type="text"></div>
                <div id="cabecalhoSuperiorDir"><button id="buttonPesquisa">Localizar</button></div>
                <!-- <hr id="hrCabecalhoSuperior"> -->

            </div>
        </nav>
        <div id="conteudoPrincipal">
            <!-- CONTEUDO DA PAGINA -->
            <?php
            include '../php/conexao.php';
            $conexao = new conexao();


            if (isset($_SESSION['id'])) {
                $dados = $conexao->buscarID($_SESSION['id']);
                if ($dados->num_rows > 0) {
                    $row = $dados->fetch_assoc();

                    echo '
                    <table>
                <tbody>
                    <form action="editarPerfil.php" method="post" id="form">
                        <tr>
                            <td id="tdTitulo" colspan="2">Perfil</td>
                        </tr>
                        <tr>
                            <td id="tdLeft">CPF: </td>
                            <td id="tdRight"> <input value="' . $row['cpf'] . '" readonly type="text" id="cpf" name="cpf" oninput="formatarCPF(this)" maxlength="14" placeholder="000.000.000-00" />
                            </td>
                        </tr>


                        <tr>
                            <td id="tdLeft">Usuário: </td>
                            <td id="tdRight"><input value="' . $row['usuario'] . '" type="text" name="user" id="user"></td>
                        </tr>
                        <tr>
                            <td id="tdLeft">Nome Completo: </td>
                            <td id="tdRight"><input value="' . $row['nome_completo'] . '" type="text" name="nomeCompleto" id="nomeCompleto"></td>
                        </tr>

                        <tr>
                            <td id="tdLeft">E-mail: </td>
                            <td id="tdRight"><input value="' . $row['email'] . '" type="email" name="email" id="email"></td>
                        </tr>
                        <tr>
                            <td id="tdLeft"><button type="submit" name="alterarPerfil" id="enviar">ALTERAR</button></td>
                            <td id="tdRight"><button type="reset" id="limpar">REDEFINIR</button></td>
                        </tr>
                    </form>
                </tbody>

            </table>

                    ';
                    if (isset($_POST['alterarPerfil'])) {


                        $conexao->alterarUsuario($_SESSION['id'], $_POST['nomeCompleto'], $_POST['user'], $_POST['email']);
                    }
                }
            } else {
                echo 'ERROR
                ERRO AO CARREGAR PAGINA
                ';
            }
            ?>

            <!-- FIM DO CONTEUDO -->
        </div>
    </div>
</body>

</html>