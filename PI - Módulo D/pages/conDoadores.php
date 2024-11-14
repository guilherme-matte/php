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
            $consultaPF = $conexao->consultarPF();
            $linha = 0;

            echo '
	<table>
		<thead>
			<tr>
				<td>ID</td>
                
                <td>CPF</td>
				
                <td>Nome</td>
                
                <td>Sobrenome</td>
                
				
                <td>Email</td>
                
                <td>Endereço</td>
				
                <td>Cep</td>

                <td>Data de Cadastro</td>

                <td>Telefone</td>

                <td>Ação</td>
			</tr>
		</thead>';

            if ($consultaPF->num_rows > 0) {


                while ($row = $consultaPF->fetch_assoc()) {
                    $linha + 1;
                    if ($linha % 2 == 0) {
                        $linha = 1;
                    } else {
                        $linha = 2;
                    }
                    echo '
                        <tbody id="linha' . $linha . '">
                        <form action="conDoadores.php" method="post">
                    <tr >
                        <td id="tdID"><input readonly type="text" name="id" value="' . $row['pessoaFisica_id'] . '"></td>
                        <td><input readonly type="text" name="cpf" maxlength="14" value="' . $row['cpf'] . '"></td>
                        <td><input type="text" name="nome" value="' . $row['nome'] . '"></td>
                        <td><input type="text" name="sobrenome" value="' . $row['sobrenome'] . '"></td>

                        <td><input type="email" name="email" value="' . $row['email'] . '"></td>

                        <td><input type="text" name="endereco" value="' . $row['endereco'] . '"></td>

                        <td><input type="text" name="cep" maxlength="9" value="' . $row['cep'] . '"></td>
                        <td><input readonly type="date" value="' . $row['data_cadastro'] . '"></td>
                        <td><input type="fone" name="telefone" maxlength="16" value="' . $row['telefone'] . '"></td>



                        <td><button name="editarPFcon">Editar</button>  <button name="excluirPF">Excluir</button ></td>
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

            if (isset($_POST['editarPFcon'])) {
                $conexao->alterarPFConsulta($_POST['id'], $_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['endereco'], $_POST['cep'], $_POST['telefone']);
            }
            if (isset($_POST['excluirPF'])) {
                $conexao->excluirPFConsulta($_POST['id']);
            }

            $consultaEmpresa = $conexao->consultarEmpresa();
            $linha = 0;

            echo '
	<table>
		<thead>
			<tr>
				<td>ID</td>
                
                <td>CNPJ</td>
				
                <td>Empresa</td>
                
                <td>Responsavel</td>
                
                <td>Cargo</td>

                <td>Email Responsavel</td>
                
                <td>Telefone Responsavel</td>

                <td>Email Empresa</td>
				
                <td>Telefone Empresa</td>

                <td>Data de Cadastro</td>

                

                <td>Ação</td>
			</tr>
		</thead>';

            if ($consultaEmpresa->num_rows > 0) {


                while ($row = $consultaEmpresa->fetch_assoc()) {
                    $linha + 1;
                    if ($linha % 2 == 0) {
                        $linha = 1;
                    } else {
                        $linha = 2;
                    }
                    echo '
                        <tbody id="linha' . $linha . '">
                        <form action="conDoadores.php" method="post">
                    <tr >
                        <td id="tdID"><input readonly type="text" name="id" value="' . $row['empresa_id'] . '"></td>
                        <td><input readonly type="text" name="cnpj" maxlength="14" value="' . $row['cnpj'] . '"></td>
                        <td><input type="text" name="nomeEmpresa" value="' . $row['nome_empresa'] . '"></td>
                        <td><input type="text" name="responsavel" value="' . $row['nome_responsavel'] . '"></td>
                        <td><input type="text" name="cargo" value="' . $row['cargo'] . '"></td>

                        <td><input type="email" name="emailResponsavel" value="' . $row['email_responsavel'] . '"></td>

                        <td><input type="fone" name="telefoneResponsavel" maxlength="16" value="' . $row['telefone_responsavel'] . '"></td>
                        <td><input type="email" name="emailEmpresa" value="' . $row['email_empresa'] . '"></td>
                        <td><input type="fone" name="telefoneEmpresa" maxlength="16" value="' . $row['telefone_empresa'] . '"></td>

                        <td><input readonly type="date" value="' . $row['data_cadastro'] . '"></td>
                        


                        <td><button name="editarEmpresaCon">Editar</button>  <button name="excluirEmpresa">Excluir</button ></td>
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
            if (isset($_POST['editarEmpresaCon'])) {
                $conexao->alterarEmpresaConsulta($_POST['id'], $_POST['nomeEmpresa'], $_POST['responsavel'], $_POST['cargo'], $_POST['emailResponsavel'], $_POST['telefoneResponsavel'], $_POST['emailEmpresa'],$_POST['telefoneEmpresa']);
            }
            if (isset($_POST['excluirEmpresa'])) {
                $conexao->excluirEmpresaConsulta($_POST['id']);
            }
            ?>


            <!-- FIM DO CONTEUDO -->
        </div>
    </div>
</body>

</html>