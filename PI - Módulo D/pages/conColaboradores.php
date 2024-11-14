<?php
session_start();
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: conColaboradores.php");
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
    <link rel="stylesheet" href="../css/tableConsulta.css" type="text/css">


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
            include "../php/conexao.php";

            $conexao = new conexao();
            $consulta = $conexao->consultarUsuarios();
            $linha = 0;

            echo '
	<h1 id="lista">Lista de Usuários</h1>
	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Nome Completo</td>
                <td>CPF</td>
                <td>Usuário</td>
				<td>Email</td>
                <td>Perfil</td>
				<td>Ação</td>
			</tr>
		</thead>';

            if ($consulta->num_rows > 0) {


                while ($row = $consulta->fetch_assoc()) {
                    $linha + 1;
                    if ($linha % 2 == 0) {
                        $linha = 1;
                    } else {
                        $linha = 2;
                    }
                    echo '
                        <tbody id="linha' . $linha . '">
                        <form action="conColaboradores.php" method="post">
                    <tr >
                        <td id="tdID"><input readonly type="text" name="id" value="' . $row['login_id'] . '"></td>
                        <td><input type="text" name="nomeCompleto" value="' . $row['nome_completo'] . '"></td>
                        <td><input readonly type="text" name="cpf" value="' . $row['cpf'] . '"></td>
                        <td><input type="text" name="usuario" value="' . $row['usuario'] . '"></td>

                        <td><input type="text" name="email" value="' . $row['email'] . '"></td>
                        <td>
                        <select name="perfil">
                        <option value="usuario" ' .

                        (
                            $row['perfil'] == "usuario" ? "selected" : ""
                        )


                        . '>Usuário</option>
                        <option value="admin"' .
                        (
                            $row['perfil'] == "admin" ? "selected" : ""
                        )
                        . '>Admin</option>
                        </select>
                        </td>

                        <td><button name="editar">Editar</button>  <button name="excluir">Excluir</button ></td>
                    </tr>
                    </form>
                    </tbody>
                    ';
                }
            } else {
                echo '
                        <tbody>
                            <tr>
                                <td colspan="5">Nenhum usuário encontrado</td>
                            </tr>
                        </tbody>
                  
                    ';
            }
            echo '
                </table>
                ';

            if (isset($_POST['editar'])) {
                if (isset($_SESSION["user"]) && $_SESSION['cargo'] == "admin") {
                    $conexao->alterarUsuarioConsulta($_POST['id'], $_POST['nomeCompleto'], $_POST['usuario'], $_POST['email'], $_POST['perfil']);
                } else {
                    echo "<script language='javascript' type='text/javascript'>"
                        . "alert('Usuario sem permissão para realizar a função editar');"
                        . "window.location.href='../pages/conColaboradores.php'"
                        . "</script>";
                }
            }
            if (isset($_POST['excluir'])) {
                if (isset($_SESSION["user"]) && $_SESSION['cargo'] == "admin") {
                    $conexao->excluirUsuarioConsulta($_POST['id']);
                } else {
                    echo "<script language='javascript' type='text/javascript'>"
                        . "alert('Usuario sem permissão para realizar a função exluir');"
                        . "window.location.href='../pages/conColaboradores.php'"
                        . "</script>";
                }
            }
            ?>


            <!-- FIM DO CONTEUDO -->
        </div>
    </div>
</body>

</html>