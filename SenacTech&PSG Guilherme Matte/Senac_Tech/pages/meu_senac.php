<?php
session_start();
ob_start();
if (isset($_GET['logout'])) {
    session_destroy();

    header('Location: ../index.php');
    exit();
}

?>
<!DOCTYPE html>

<html>

<head>
    <title>Senac Tech</title>
    <meta charset="utf8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/menu.css" />
    <link rel="stylesheet" type="text/css" href="../css/layout.css" />
    <link rel="stylesheet" type="text/css" href="../css/formulario.css" />

</head>
<!-- -------------------------------- -->

<body>
    <main>
        <header>
            <section id="sectionCabecalho">
                <div id="cabecalho">
                    <p class="pCenter">

                    <p class="pCenter"><img id="logoSenac" src="../img/senac_logo.png" title="Senac RS"></p>

                    <a class="linkRedes" href="https://www.facebook.com/senacrsoficial" target="blank">
                        <img class="imgRedes" src="../img/icon_facebook.png" alt="Rede social Facebook"
                            title="Rede social Facebook" />
                    </a>
                    <a class="linkRedes" href="https://www.instagram.com/senacrs/" target="blank">
                        <img class="imgRedes" src="../img/icon_instagram.png" alt="Rede social Instagram"
                            title="Rede social Instagram" />
                    </a>
                    <a class="linkRedes" href="https://x.com/senacrs" target="blank">
                        <img class="imgRedes" src="../img/icon_twitter.png" alt="Rede social X-Twitter"
                            title="Rede social X-Twitter" />
                    </a>
                    <a class="linkRedes"
                        href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGjNOZytbRLdwAAAZCDGdKQorc6a1HY6F3qjme8z6BVRLg3Kf_kVJ6e2WdIWIQaf8cRxOiTYKMz4bfZdnAKle3AQRelQP4NsP7sHBP37X7E5DOoOr4lQF2mPZUvO0avML2F1HE=&original_referer=https://www.senacrs.com.br/&sessionRedirect=https%3A%2F%2Fbr.linkedin.com%2Fschool%2Fsenac-rs%2F"
                        target="blank">
                        <img class="imgRedes" src="../img/icon_linkedin.png" alt="Rede social Linkedin"
                            title="Rede social Linkedin" />
                    </a>
                    <a class="linkRedes" href="https://www.youtube.com/senacrsoficial" target="blank">
                        <img class="imgRedes" src="../img/icon_youtube.png" alt="Canal Youtube" title="Canal Youtube" />
                    </a>
                    <a class="linkRedes" href="https://open.spotify.com/user/oe434380olmwip17xaxyjb0bc" target="blank">
                        <img class="imgRedes" src="../img/icon_spotify.png" alt="Canal Spotify" title="Canal Spotify" />
                    </a>
                    </p>
                </div>
                <!-- <div id="cabecalhoPages"> -->
                <input type="checkbox" id="bt_menu" />
                <label for="bt_menu">&#9776;</label>
                <nav class="menu">

                    <ul>
                        <li>

                            <a href="../index.php">Home</a>

                        </li>

                        <li>

                            <a href="cursos.php">Cursos</a>
                            <ul>
                                <li>
                                    <a href="cursos_informatica.php">Téc em Informática</a>
                                </li>
                                <li>
                                    <a href="cursos_administracao.php">Administração</a>
                                </li>
                                <li>
                                    <a href="cursos_desenvolvimento.php">Desenvolvimento</a>
                                </li>
                                <li>
                                    <a href="RS_TI.php">Programa - RS-TI</a>
                                </li>
                                <li>
                                    <a href="aprendizagem.php">Programa - Aprendizagem</a>
                                </li>
                                <li>
                                    <a href="cursos.php#livres">Cursos Livres</a>
                                </li>

                            </ul>
                        </li>

                        <li>

                            <a href="faleconosco.php">Fale Conosco</a>

                        </li>
                        <li>

                            <a href="meu_senac.php">Meu Senac</a>

                        </li>
                        <li>

                            <a href="localizacao.php">Localização</a>

                        </li>

                        <li>

                            <a href="../../PSG/index.php">PSG</a>
                        </li>
                        <?php
                        if (isset($_SESSION['cargo_usu_sessao']) && $_SESSION['cargo_usu_sessao'] == 'ADM') {
                            echo '
                            <li>
                                <a href="consulta.php">Consultar</a>
                            </li>';
                        }
                        ?>
                        <li>
                            <?php

                            if (isset($_SESSION["nome_usu_sessao"])) {
                                echo "<p id='user'> " . $_SESSION['nome_usu_sessao'] . "</p>";

                                if (isset($_SESSION['cargo_usu_sessao']) && $_SESSION['cargo_usu_sessao'] == 'ADM') {
                                    echo '
                                    <ul>
                                        <li>
                                            <a href="adm.php">Administração</a>
                                            <a href="meu_senac.php?logout">Sair</a>
                                        </li>
                                    </ul>';
                                } else {
                                    echo '
                                    <ul>
                                        <li>
                                            <a href="meu_senac.php?logout">Sair</a>
                                        </li>
                                    </ul>';
                                }
                            } else {
                                echo '<a href="login.php">Entrar</a>';
                            }

                            ?>



                        </li>
                    </ul>
                </nav>

                <!-- </div> -->
                <hr id="hrCabecalhoInf" />

            </section>

        </header>
        <!-- Corpo da pagina -->

        <article id="articleTituloFaleConosco">
            <p class="titulo">Meu Senac</p>

        </article>
        <section id="sectionForms">

            <article id="articleForms">
                <p id="camposObrigatorios">
                    Todos o campos são OBRIGATÓRIOS
                <form action="../php_senac_tech/meuSenac.php" method="post">

                    <fieldset>

                        <fieldset class="bloco">
                            <div class="dados">
                                <label>Nome Completo</label>
                                <input type="text" maxlength="50" name="nomeCompleto"
                                    placeholder="Digite seu nome completo" required>
                            </div>
                        </fieldset>

                        <fieldset class="bloco">
                            <div class="dadosTelefone">
                                <label>Telefone:</label>
                                <div id="formTelefone">
                                    <input type="text" name="ddd" maxlength="3" required placeholder="(00)" title="DDD"
                                        id="formDDD">

                                    <input type="tel" maxlength="9" name="telefone" required placeholder="0 0000-0000"
                                        title="Número de Telefone" id="formTel">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="bloco">
                            <div class="dados">
                                <label>UF:</label>
                                <select name="UF" required>
                                    <option value="Acre">Acre</option>
                                    <option value="Alagoas">Alagoas</option>
                                    <option value="Amapá">Amapá</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Bahia">Bahia</option>
                                    <option value="Ceará">Ceará</option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                    <option value="Espírito Santo">Espírito Santo</option>
                                    <option value="Goiás">Goiás</option>
                                    <option value="Maranhão">Maranhão</option>
                                    <option value="Mato Grosso">Mato Grosso</option>
                                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                    <option value="Minas Gerais">Minas Gerais</option>
                                    <option value="Pará">Pará</option>
                                    <option value="Paraíba">Paraíba</option>
                                    <option value="Paraná">Paraná</option>
                                    <option value="Pernambuco">Pernambuco</option>
                                    <option value="Piauí">Piauí</option>
                                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                                    <option value="Rio Grande do Sul" selected>Rio Grande do Sul</option>
                                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                    <option value="Rondônia">Rondônia</option>
                                    <option value="Roraima">Roraima</option>
                                    <option value="Santa Catarina">Santa Catarina</option>
                                    <option value="São Paulo">São Paulo</option>
                                    <option value="Sergipe">Sergipe</option>
                                    <option value="Tocantins">Tocantins</option>
                                </select>
                            </div>
                        </fieldset>

                        <fieldset class="bloco">
                            <div class="dados">
                                <label>Cidade:</label>
                                <select name="cidade" required>
                                    <option value="Porto Alegre" selected>Porto Alegre</option>
                                    <option value="Caxias do Sul">Caxias do Sul</option>
                                    <option value="Canoas">Canoas</option>
                                    <option value="Pelotas">Pelotas</option>
                                </select>
                            </div>
                        </fieldset>

                        <fieldset class="bloco">
                            <div class="dados">
                                <label>Email:</label>
                                <input type="email" maxlength="50" name="email" required placeholder="nome@dominio.com"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            </div>
                        </fieldset>
                        <fieldset class="bloco">
                            <div class="dados">
                                <label>Senha:</label>
                                <input type="password" name="senha" required minlength="3" maxlength="15">
                            </div>
                        </fieldset>
                        <fieldset class="bloco">
                            <div class="dados">
                                <label>CPF:</label>
                                <input type="text" maxlength="11" name="cpf" placeholder="00000000000" required>
                            </div>
                        </fieldset>



                        <fieldset class="bloco">
                            <div class="dadosCheckbox">
                                <input type="checkbox" name="autorizacao" required>

                                <label>
                                    Autorizo o Senac-RS me contatar e realizar o envio de informações relacionadas
                                    aos seus produtos/serviços e eventos
                                </label>
                            </div>
                        </fieldset>

                        <button type="submit" class="botao">Enviar</button>

                    </fieldset>
                </form>
                </p>
            </article>
        </section>

        <!-- Fim do Corpo da pagina -->
        <footer id="rodape">

            <hr id="hrRodapeSup" />

            <p class="pCenter"><img id="logoSenacInf" src="../img/senac_logo.png" title="Senac RS"></p>

            <p id="direitos">© Todos os Direitos Reservados - 2024.</p>
        </footer>
    </main>
</body>

</html>
<?php
ob_end_flush();

?>