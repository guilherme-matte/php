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
                <hr class="hr2">
                <ul>
                    <ul>
                        CADASTRO
                        <li>
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
                <div id="cabecalhoSuperiorEsq">Pesquisar</div>
                <div id="cabecalhoSuperiorMeio"><input id="inputPesquisa" type="text"></div>
                <div id="cabecalhoSuperiorDir"><button id="buttonPesquisa">Localizar</button></div>
                <!-- <hr id="hrCabecalhoSuperior"> -->

            </div>
        </nav>

        <div id="conteudoPrincipal">
            <!-- CONTEUDO DA PAGINA -->
            <table>
                <tbody>
                    <form action="cadUsuarios.php" method="post" id="form">

                        <tr>
                            <td id="tdLeft">CPF: </td>
                            <td id="tdRight"><input type="text" name="cpf" id="cpf"></td>
                        </tr>
                        <tr>
                            <td id="tdLeft">Nome Completo: </td>
                            <td id="tdRight"><input type="text" name="nomeCompleto" id="nomeCompleto"></td>
                        </tr>
                        <tr>
                            <td id="tdLeft">Acesso:</td>
                            <td id="tdRight">
                                <select name="cargo" id="cargo">
                                    <option value="usuario" selected>Usuário</option>

                                    <option value="admin">Administrador</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td id="tdLeft">Usuário: </td>
                            <td id="tdRight"><input type="text" name="user" id="user"></td>
                        </tr>
                        <tr>
                            <td id="tdLeft">Senha: </td>
                            <td id="tdRight"><input type="password" name="password" id="password"></td>
                        </tr>
                        <tr>
                            <td id="tdLeft">E-mail: </td>
                            <td id="tdRight"><input type="email" name="email" id="email"></td>
                        </tr>
                        <tr>
                            <td id="tdLeft"><button type="submit" name="enviar" id="enviar">Cadastrar</button></td>
                            <td id="tdRight"><button type="reset" id="limpar">Limpar</button></td>
                        </tr>
                    </form>
                </tbody>

            </table>
            <?php
            include("../php/conexao.php");
            $conexao = new conexao();

            if (isset($_POST["enviar"])) {
                $conexao->cadastrarUsuario($_POST['user'], $_POST['password'], $_POST['cargo'], $_POST['cpf'], $_POST['nomeCompleto'], $_POST['email']);
            }


            ?>
            <!-- FIM DO CONTEUDO -->
        </div>
    </div>
</body>

</html>