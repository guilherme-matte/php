<!DOCTYPE html>

<html>

<head>
    <title>Senac Tech</title>
    <meta charset="utf8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/layout.css" />
    <link rel="stylesheet" type="text/css" href="../css/menu.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
</head>
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

                            <a href=".cursos.php">Cursos</a>
                            <ul>
                                <li>
                                    <a href="./cursos_informatica.php">Téc em Informática</a>
                                </li>
                                <li>
                                    <a href="./cursos_administracao.php">Administração</a>
                                </li>
                                <li>
                                    <a href="./cursos_desenvolvimento.php">Desenvolvimento</a>
                                </li>
                                <li>
                                    <a href="./RS_TI.php">Programa - RS-TI</a>
                                </li>
                                <li>
                                    <a href="./aprendizagem.php">Programa - Aprendizagem</a>
                                </li>
                                <li>
                                    <a href="./cursos.php#livres">Cursos Livres</a>
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
                    </ul>
                </nav>

                <!-- </div> -->
                <hr id="hrCabecalhoInf" />

            </section>

        </header>
        <!-- Corpo da pagina -->
        <p class="titulo">Seja Bem-Vindo!</p>
        <br>

        <div id="blocoLogin">

            <form action="../php_senac_tech/verificaLogin.php" method="post">
                <input type="text" name="email" required placeholder="E-mail">
                <br>

                <input type="password" name="senha" required placeholder="Senha">
                <br>
                <button type="submit">Acessar</button>
            </form>

        </div>


        <!-- Fim do Corpo da pagina -->
        <footer id="rodape">

            <hr id="hrRodapeSup" />

            <p class="pCenter"><img id="logoSenacInf" src="../img/senac_logo.png" title="Senac RS"></p>

            <p id="direitos">© Todos os Direitos Reservados - 2024.</p>
        </footer>
    </main>
</body>

</html>