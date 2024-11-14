<?php
session_start();
if (!isset($_SESSION)) {
    header("Location: ./pages/login.php");
}
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: cadDoador.php");
    $_SESSION['user'] = null;
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
    <link rel="stylesheet" href="../css/formCadastroDoacao.css" type="text/css">


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
        <!-- CONTEUDO DA PAGINA -->
        <div id="conteudoPrincipal">

            <script>
                function formatarCPF(campo) {
                    let valor = campo.value.replace(/\D/g, '');
                    if (valor.length <= 11) {
                        valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
                        valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
                        valor = valor.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
                    }
                    campo.value = valor;
                }

                function formatarCNPJ(campo) {
                    let valor = campo.value.replace(/\D/g, '');
                    if (valor.length <= 14) {
                        valor = valor.replace(/^(\d{2})(\d)/, '$1.$2');
                        valor = valor.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
                        valor = valor.replace(/\.(\d{3})(\d)/, '.$1/$2');
                        valor = valor.replace(/(\d{4})(\d)/, '$1-$2');
                    }
                    campo.value = valor;
                }
            </script>


            <div class="container">
                <a href="#pessoafisica">Doação Pessoa Física</a>
                <a href="#empresa">Doação Empresa</a>
                <div id="pessoafisica" class="cadastro">
                    <section id="sectionForms">
                        <article id="articleForms">
                            <p id="formP">Pessoa Física</p>
                            <form action="cadDoacao.php" method="post">

                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Pesquisar por CPF:</label>
                                        <input type="text" id="cpf" name="cpfPesquisa" oninput="formatarCPF(this)" maxlength="14" placeholder="000.000.000-00" />

                                    </div>
                                    <button id="btnBuscar" name="buscarCPF">Buscar</button>
                                </fieldset>


                                <?PHP
                                include("../php/conexao.php");
                                $conexao = new conexao();
                                if (isset($_POST['cpfPesquisa']) == null || isset($_POST['cpfPesquisa']) == "") {
                                    $cpf = 1;
                                } else {
                                    $cpf = $_POST["cpfPesquisa"];
                                }
                                if (isset($_POST["buscarCPF"])) {
                                    $dados = $conexao->buscarCPF($cpf);

                                    if ($dados->num_rows > 0) {
                                        $row = $dados->fetch_assoc();
                                        $nomeCompleto = $row["nome"] . " " . $row["sobrenome"];
                                        echo '
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>CPF: </label>
                                        <input readonly value="' . $row["cpf"] . '" type="text" name="cpf" required maxlength="50">
                                    </div>
                                </fieldset>

                                    <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Nome Completo: </label>
                                        <input readonly value="' . $nomeCompleto . '" type="text" name="nomeCompleto" required maxlength="50">
                                    </div>
                                </fieldset>

                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Quantidade </label>
                                        <input min="0" type="number" name="quantidade" required maxlength="50">
                                    </div>
                                </fieldset>

                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Categoria: </label>
                                        <select required name="categoria">
                                            <option value="Computador" select>Computador</option>
                                            <option value="Notebook">Notebook</option>
                                            <option value="Perifericos">Perifericos</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Descrição </label>
                                        <textarea name="descricao" id="txtDescricao"></textarea>
                                </fieldset>

                                <fieldset class="bloco">
                                    <button type="submit" name="cadastrarProdPF" id="cadastrar">Cadastrar Produto</button>
                                </fieldset>
                                    ';
                                    } else {
                                        echo "ERRO AO BUSCAR USUARIO(INEXISTENTE)";
                                    }
                                }
                                if (isset($_POST['cadastrarProdPF'])) {
                                    $conexao->cadProdutoPF($_POST['cpf'], $_POST['nomeCompleto'], $_POST['quantidade'], $_POST['categoria'], $_POST['descricao']);
                                }
                                ?>

                            </form>
                        </article>
                    </section>
                </div>
                <div id="empresa" class="cadastro">
                    <section id="sectionForms">
                        <article id="articleForms">
                            <p id="formP">Empresa</p>
                            <form action="cadDoacao.php" method="post">

                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Pesquisar por CNPJ:</label>
                                        <input type="text" id="cnpj" name="cnpjPesquisa" oninput="formatarCNPJ(this)" maxlength="18" placeholder="00.000.000/0000-00" />

                                    </div>
                                    <button id="btnBuscar" name="buscarCNPJ">Buscar</button>
                                </fieldset>


                                <?PHP
                                if (isset($_POST['cnpjPesquisa']) == null || isset($_POST['cnpjPesquisa']) == "") {
                                    $cnpj = 1;
                                } else {
                                    $cnpj = $_POST["cnpjPesquisa"];
                                }
                                if (isset($_POST["buscarCNPJ"])) {
                                    $dados = $conexao->buscarCnpj($cnpj);

                                    if ($dados->num_rows > 0) {
                                        $row = $dados->fetch_assoc();
                                        echo '
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>cnpj: </label>
                                        <input readonly value="' . $row["cnpj"] . '" type="text" name="cnpj" required maxlength="50">
                                    </div>
                                </fieldset>

                                    <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Nome da Empresa: </label>
                                        <input readonly value="' . $row['nome_empresa'] . '" type="text" name="nomeEmpresa" required maxlength="50">
                                    </div>
                                </fieldset>
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Responsavel: </label>
                                        <input readonly value="' . $row['nome_responsavel'] . '" type="text" name="responsavel" required maxlength="50">
                                    </div>
                                </fieldset>
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Quantidade </label>
                                        <input min="0" type="number" name="quantidade" required maxlength="50">
                                    </div>
                                </fieldset>

                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Categoria: </label>
                                        <select required name="categoria">
                                            <option value="Computador" select>Computador</option>
                                            <option value="Notebook">Notebook</option>
                                            <option value="Perifericos">Perifericos</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Descrição </label>
                                        <textarea name="descricao" id="txtDescricao"></textarea>
                                </fieldset>

                                <fieldset class="bloco">
                                    <button type="submit" name="cadastrarProdutoEmpresa" id="cadastrar">Cadastrar Produto</button>
                                </fieldset>
                                    ';
                                    } else {
                                        echo "ERRO AO BUSCAR USUARIO(INEXISTENTE)";
                                    }
                                }
                                if (isset($_POST['cadastrarProdutoEmpresa'])) {
                                    $conexao->cadProdutoEmpresa($_POST['cnpj'], $_POST['categoria'], $_POST['quantidade'], $_POST['nomeEmpresa'], $_POST['responsavel'], $_POST['descricao']);
                                }
                                ?>

                            </form>
                        </article>
                    </section>
                </div>
            </div>

            <!-- FIM DO CONTEUDO -->
        </div>
    </div>
</body>

</html>