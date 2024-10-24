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
                <div id="cabecalhoSuperiorEsq"><p>Pesquisar</p> </div>
                <div id="cabecalhoSuperiorMeio"><input id="inputPesquisa" type="text"></div>
                <div id="cabecalhoSuperiorDir"><button id="buttonPesquisa">Localizar</button></div>
                <!-- <hr id="hrCabecalhoSuperior"> -->

            </div>
        </nav>
        <!-- CONTEUDO DA PAGINA -->
        <div id="conteudoPrincipal">




            <div class="container">
                <a href="#pessoafisica">Pessoa Física</a>
                <a href="#empresa">Empresa</a>
                <div id="pessoafisica" class="cadastro">
                    <section id="sectionForms">
                        <article id="articleForms">
                            <p id="formP">Pessoa Física</p>
                            <form action="../php/cadUsuario.php" method="post">

                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>CPF:</label>
                                        <input type="text" name="cpf" required maxlength="14"
                                            placeholder="000.000.000-00">
                                    </div>
                                </fieldset>
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Nome: </label>
                                        <input type="text" name="nome" required maxlength="50">
                                    </div>
                                </fieldset>
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Sobrenome: </label>
                                        <input type="text" name="sobrenome" required maxlength="50">
                                    </div>
                                </fieldset>
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Telefone:</label>
                                        <input type="tel" name="telefone" required maxlength="11"
                                            placeholder="00000000000">
                                    </div>
                                </fieldset>
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Email:</label>
                                        <input type="email" name="email" required maxlength="50">
                                    </div>
                                </fieldset>
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Endereço:</label>
                                        <input type="text" name="endereco" required maxlength="50">
                                    </div>
                                </fieldset>
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>CEP:</label>
                                        <input type="text" name="cep" required maxlength="10" placeholder="00.000-000">
                                    </div>
                                </fieldset>

                                <fieldset class="bloco">
                                    <input type="submit" name="CADASTRAR" id="cadastrar">
                                </fieldset>
                            </form>
                        </article>
                    </section>
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
                                        <input type="text" name="nomeSocial" required maxlength="50">
                                    </div>
                                </fieldset>
                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>Responsavel: </label>
                                        <input type="text" name="responsavel" required maxlength="50">
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
                                    <input type="submit" name="CADASTRAR" id="cadastrar">
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