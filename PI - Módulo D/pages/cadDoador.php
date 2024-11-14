<?php

session_start();
if (isset($_SESSION['user'])) {

    
    if (isset($_GET["logout"])) {
        session_destroy();
        header("Location: cadDoador.php");
       
    }
} else {
    header("Location: ./login.php");
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

        function formatarTelefone(campo) {
            let valor = campo.value.replace(/\D/g, '');

            if (valor.length <= 10) {
                valor = valor.replace(/(\d{2})(\d)/, '($1) $2');
                valor = valor.replace(/(\d{4})(\d)/, '$1-$2');
            } else {
                valor = valor.replace(/(\d{2})(\d)/, '($1) $2');
                valor = valor.replace(/(\d{5})(\d)/, '$1-$2');
            }

            campo.value = valor;
        }

        function formatarCEP(campo) {
            let valor = campo.value.replace(/\D/g, '');

            if (valor.length <= 8) {
                valor = valor.replace(/(\d{5})(\d)/, '$1-$2');
            }

            campo.value = valor;
        }
    </script>
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
        <!-- CONTEUDO DA PAGINA -->
        <div id="conteudoPrincipal">




            <div class="container">
                <a href="#pessoafisica">Pessoa Física</a>
                <a href="#empresa">Empresa</a>
                <div id="pessoafisica" class="cadastro">
                    <section id="sectionForms">
                        <article id="articleForms">
                            <p id="formP">Pessoa Física</p>
                            <form action="cadDoador.php" method="post">

                                <fieldset class="bloco">
                                    <div class="dados">
                                        <label>CPF:</label>
                                        <input type="text" id="cpf" name="cpf" oninput="formatarCPF(this)" maxlength="14" placeholder="000.000.000-00" />
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
                                        <input type="tel" name="telefone" required maxlength="16"
                                            oninput="formatarTelefone(this)" placeholder="(xx) xxxxx - xxxx / (xx) xxxx - xxxx">
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
                                        <input type="text" name="cep" required maxlength="9" placeholder="00000-000" oninput="formatarCEP(this)">
                                    </div>
                                </fieldset>

                                <fieldset class="bloco">
                                    <input type="submit" name="cadastrar_pessoaFisica" id="cadastrar">
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
                                        <input type="text" id="cnpj" name="cnpj" oninput="formatarCNPJ(this)" maxlength="18" placeholder="00.000.000/0000-00" />
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
                                            oninput="formatarTelefone(this)" placeholder="(xx) xxxxx - xxxx / (xx) xxxx - xxxx">
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
                                        <input type="tel" name="telefoneResponsavel" required maxlength="16"
                                            oninput="formatarTelefone(this)" placeholder="(xx) xxxxx - xxxx / (xx) xxxx - xxxx">
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
            <?php
            include("../php/conexao.php");
            $conexao = new conexao();

            if (isset($_POST["cadastrar_pessoaFisica"])) {
                $conexao->cadPessoaFisica($_POST["cpf"], $_POST["nome"], $_POST["sobrenome"], $_POST["telefone"], $_POST["email"], $_POST["endereco"], $_POST["cep"], date('Y-m-d'));
            }
            if (isset($_POST['cadastrar_empresa'])) {
                $conexao->cadastrarEmpresa($_POST['cnpj'], $_POST['nomeEmpresa'], $_POST['nomeResponsavel'], $_POST['telefoneEmpresa'], $_POST['telefoneResponsavel'], $_POST['emailEmpresa'], $_POST['emailResponsavel'], $_POST['cargo'], date('Y-m-d'));
            }
            ?>
            <!-- FIM DO CONTEUDO -->
        </div>
    </div>
</body>

</html>