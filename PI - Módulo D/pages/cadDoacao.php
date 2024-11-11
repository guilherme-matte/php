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
                    let valor = campo.value.replace(/\D/g, ''); // Remove tudo que não for número
                    if (valor.length <= 11) {
                        valor = valor.replace(/(\d{3})(\d)/, '$1.$2'); // Coloca o primeiro ponto
                        valor = valor.replace(/(\d{3})(\d)/, '$1.$2'); // Coloca o segundo ponto
                        valor = valor.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Coloca o hífen
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
                                        <label>CPF:</label>
                                        <input required type="text" id="cpf" name="cpf" maxlength="14" placeholder="000.000.000-00"
                                            value="<?php echo htmlspecialchars($cpf); ?>" />
                                    </div>
                                    <button type="submit" id="btnBuscar" name="buscar">Buscar</button>
                                </fieldset>
                            </form>

                            <?php if (isset($dados)): ?>
                                <!-- Exibe os dados retornados se houver -->
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Nome Completo: </label>
                                        <input readonly type="text" name="nomeCompleto" value="<?php echo htmlspecialchars($dados['nome_completo']); ?>" maxlength="50">
                                    </div>
                                </fieldset>
                            <?php endif; ?>

                            <fieldset class="bloco">
                                <div class="dados">
                                    <label>Quantidade </label>
                                    <input min="0" type="number" name="quantidade" required maxlength="50">
                                </div>
                            </fieldset>

                            <fieldset class="bloco">
                                <div class="dados">
                                    <label>Categoria: </label>
                                    <select name="categoria">
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
                                </div>
                            </fieldset>

                            <fieldset class="bloco">
                                <input type="submit" name="CADASTRAR" id="cadastrar">
                            </fieldset>
                        </article>
                    </section>
                </div>
            </div>
        </div>
        <div id="empresa" class="cadastro">
            <section id="sectionForms">
                <article id="articleForms">
                    <p id="formP">Empresa</p>
                    <form action="#" method="post">

                        <fieldset class="bloco">
                            <div class="dados">
                                <label>CNPJ::</label>
                                <input type="text" name="cnpj" required maxlength="14"
                                    placeholder="00.000.000/0000-00">
                            </div>
                        </fieldset>
                        <fieldset class="bloco">
                            <div class="dados">
                                <label>Nome da Empresa: </label>
                                <input type="text" name="nomeEmpresa" required maxlength="50">
                            </div>
                        </fieldset>
                        <fieldset class="bloco">
                            <div class="dados">
                                <label>Responsavel: </label>
                                <input type="text" name="nomeResponsavel" required maxlength="50">
                            </div>
                        </fieldset>
                        <fieldset class="bloco">
                            <div class="dados">
                                <label>Telefone da Empresa</label>
                                <input type="tel" name="telefoneEmpresa" required maxlength="16"
                                    placeholder="(00) 0 0000-0000">
                            </div>
                        </fieldset>
                        <fieldset class="bloco">
                            <div class="dados">
                                <label>Email da Empresa:</label>
                                <input type="email" name="emailEmpresa" required maxlength="50">
                            </div>
                        </fieldset>

                        <fieldset class="bloco">
                            <div class="dados">
                                <label>Telefone do Responsavel:</label>
                                <input type="tel" name="telefoneResponsavel" required maxlength="10"
                                    placeholder="00000000000">
                            </div>
                        </fieldset>
                        <fieldset class="bloco">
                            <div class="dados">
                                <label>Email do Responsavel:</label>
                                <input type="email" name="emailResponsavel" required maxlength="50">
                            </div>
                        </fieldset>
                        <fieldset class="bloco">
                            <div class="dados">
                                <label>Cargo:</label>
                                <input type="text" name="cargo" required maxlength="50">
                            </div>
                        </fieldset>
                        <fieldset class="bloco">
                            <input type="submit" name="cadastrar_empresa" id="cadastrar">
                        </fieldset>
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