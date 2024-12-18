<?php
session_start();
ob_start();
if (isset($_GET['logout'])) {
    session_destroy();
    // echo "<script language='javascript' type='text/javascript'>
    //         window.location.href='index.php';
    //     </script>";
    header('Location: index.php');
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
    <link rel="stylesheet" type="text/css" href="./css/reset.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" href="./css/menu.css" />
    <link rel="stylesheet" type="text/css" href="./css/layout.css" />
</head>
<!-- -------------------------------- -->

<body>
    <main>
        <header>
            <section id="sectionCabecalho">
                <div id="cabecalho">
                    <p class="pCenter">

                    <p class="pCenter"><img id="logoSenac" src="./img/senac_logo.png" title="Senac RS"></p>

                    <a class="linkRedes" href="https://www.facebook.com/senacrsoficial" target="blank">
                        <img class="imgRedes" src="./img/icon_facebook.png" alt="Rede social Facebook"
                            title="Rede social Facebook" />
                    </a>
                    <a class="linkRedes" href="https://www.instagram.com/senacrs/" target="blank">
                        <img class="imgRedes" src="./img/icon_instagram.png" alt="Rede social Instagram"
                            title="Rede social Instagram" />
                    </a>
                    <a class="linkRedes" href="https://x.com/senacrs" target="blank">
                        <img class="imgRedes" src="./img/icon_twitter.png" alt="Rede social X-Twitter"
                            title="Rede social X-Twitter" />
                    </a>
                    <a class="linkRedes"
                        href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGjNOZytbRLdwAAAZCDGdKQorc6a1HY6F3qjme8z6BVRLg3Kf_kVJ6e2WdIWIQaf8cRxOiTYKMz4bfZdnAKle3AQRelQP4NsP7sHBP37X7E5DOoOr4lQF2mPZUvO0avML2F1HE=&original_referer=https://www.senacrs.com.br/&sessionRedirect=https%3A%2F%2Fbr.linkedin.com%2Fschool%2Fsenac-rs%2F"
                        target="blank">
                        <img class="imgRedes" src="./img/icon_linkedin.png" alt="Rede social Linkedin"
                            title="Rede social Linkedin" />
                    </a>
                    <a class="linkRedes" href="https://www.youtube.com/senacrsoficial" target="blank">
                        <img class="imgRedes" src="./img/icon_youtube.png" alt="Canal Youtube" title="Canal Youtube" />
                    </a>
                    <a class="linkRedes" href="https://open.spotify.com/user/oe434380olmwip17xaxyjb0bc" target="blank">
                        <img class="imgRedes" src="./img/icon_spotify.png" alt="Canal Spotify" title="Canal Spotify" />
                    </a>
                    </p>
                </div>
                <!-- <div id="cabecalhoPages"> -->
                <input type="checkbox" id="bt_menu" />
                <label for="bt_menu">&#9776;</label>
                <nav class="menu">

                    <ul>
                        <li>

                            <a href="./index.php">Home</a>

                        </li>

                        <li>

                            <a href="./pages/cursos.php">Cursos</a>
                            <ul>
                                <li>
                                    <a href="./pages/cursos_informatica.php">Téc em Informática</a>
                                </li>
                                <li>
                                    <a href="./pages/cursos_administracao.php">Administração</a>
                                </li>
                                <li>
                                    <a href="./pages/cursos_desenvolvimento.php">Desenvolvimento</a>
                                </li>
                                <li>
                                    <a href="./pages/RS_TI.php">Programa - RS-TI</a>
                                </li>
                                <li>
                                    <a href="./pages/aprendizagem.php">Programa - Aprendizagem</a>
                                </li>
                                <li>
                                    <a href="./pages/cursos.php#livres">Cursos Livres</a>
                                </li>

                            </ul>
                        </li>

                        <li>

                            <a href="./pages/faleconosco.php">Fale Conosco</a>

                        </li>
                        <li>

                            <a href="./pages/meu_senac.php">Meu Senac</a>

                        </li>
                        <li>

                            <a href="./pages/localizacao.php">Localização</a>

                        </li>

                        <li>

                            <a href="../PSG/index.php">PSG</a>
                        </li>
                        <?php
                        if (isset($_SESSION['cargo_usu_sessao']) && $_SESSION['cargo_usu_sessao'] == 'ADM') {
                            echo '
                            <li>
                                <a href="./pages/consulta.php">Consultar</a>
                            </li>';
                        }
                        ?>


                        <li>
                            <?php
                            ob_start();
                            if (isset($_SESSION["nome_usu_sessao"])) {


                                echo "<p id='user'> " . $_SESSION['nome_usu_sessao'] . "</p>";

                                if (isset($_SESSION['cargo_usu_sessao']) && $_SESSION['cargo_usu_sessao'] == 'ADM') {
                                    echo '
                                    <ul>
                                        <li>
                                            <a href="./pages/adm.php">Administração</a>
                                            <a href="index.php?logout">Sair</a>
                                        </li>
                                    </ul>';
                                } else {
                                    echo '
                                    <ul>
                                        <li>
                                            <a href="index.php?logout">Sair</a>
                                        </li>
                                    </ul>';
                                }
                            } else {
                                echo '<a href="./pages/login.php">Entrar</a>';
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
        <section>
            <p class="titulo">
                História do Senac Tech
            </p>
            <br />
            <p class="pJustify">

                Fundado em 19 de outubro de 1989, o Senac Tech é um centro de tecnologia voltado para o conhecimento.
                <br>
                Com um ambiente e um portfólio de cursos moderno, atende mais de mil alunos por ano por meio de cursos
                EAD e
                presenciais em diversos níveis, além de ações extensivas.

                O principal foco da escola é a educação profissional nas áreas da Informática e Gestão.
                <br>
                Ganhou diversos prêmios, entre eles o Troféu Bronze no Prêmio Qualidade RS - PQRS em 2008, 2009 e 2012,
                o
                Troféu
                Prata em 2015 e 2017, o Prêmio SUCESU, que destacou a fundação do Senac Informática como um dos seis
                acontecimentos mais importantes da década, e o reconhecimento pelo Comitê de Comércio e Serviços pela
                contribuição ao Sistema da Qualidade em 2008 e 2009.
                <br>
                Em 2016 comemorou, juntamente com todas as unidades do Estado, a conquista do Prêmio Nacional da
                Qualidade
                (PNQ). No ano seguinte, celebrou o Prêmio Ibero-Americano da Qualidade.
                <br>
                O Senac-RS foi a primeira instituição de ensino do Brasil a receber as distinções, reconhecimentos
                máximo à
                excelência.
                <br>
                Em março 2018, foi agraciado com o Melhores em Gestão e eleito Destaque na distinção promovida pela
                Fundação
                Nacional da Qualidade (FNQ).
                <br>
                A escola conta com docentes qualificados na área da tecnologia, com certificação CCNA da Cisco e
                Pós-graduação
                na área da tecnologia e em docência no ensino profissional.

            <p class="pCenter">
                <iframe id="iFrameYoutube" src="https://www.youtube.com/embed/c2ptmroeOwQ"
                    title="Senac Tech - Desenvolvendo para o Futuro" frameborder="1"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </p>
            </p>
        </section>

        <hr class="hr" />
        <section>
            <p class="titulo">
                História do Senac
            </p>
            <p class="pJustify">


                O Serviço Nacional de Aprendizagem Comercial (Senac) é uma instituição brasileira de educação criada em
                10
                de
                janeiro de 1946 através do decreto-lei 8.621. É uma entidade privada com fins públicos que recebe
                contribuição compulsória das empresas do comércio e de atividades assemelhadas. A nível nacional é
                administrado
                pela Confederação Nacional do Comércio.

                <br />

                Os primeiro cursos ofertados pelo SENAC foram em 1947, foi o curso de Praticante de Comércio e o curso
                de
                Praticante de Escritório, destinado a jovens entre 14 e 18 anos. Já para maiores de 18 anos, foram
                disponibilizados os cursos de Balconista de Tecidos, Calçados e Ferragens, Arquivista e
                Caixa-Tesoureiro.

            </p>
            <p class="pCenter">
                <img id="imgFachadaSenac" src="./img/senac_fachada.jpg" title="Senac Fecomércio" height="auto">
            </p>
        </section>
        <hr class="hr" />
        <br />
        <section id="sectionNoticias">

            <nav id="navNoticias">
                <div id="meioNoticias">
                    <p id="tituloNoticias">Ultimas noticias</p>
                    <hr class="hrAzul" />

                    <a class="linkNoticias" href="https://www.dn.senac.br/reposicionamento-aprendizagem/"
                        target="blank">Senac
                        ouve empresas para
                        reposicionar seu Programa
                        de Aprendizagem</a>

                    <hr class="hrAzul" />
                    <a class="linkNoticias" href="https://www.dn.senac.br/programa-de-estagio-inscricoes-abertas/"
                        target="blank">Programa de
                        Estágio:
                        inscrições abertas</a>

                    <hr class="hrAzul" />
                    <a class="linkNoticias" href="https://www.dn.senac.br/comercio-e-industria-juntos/"
                        target="blank">Comércio
                        e indústria
                        juntos</a>

                    <hr class="hrAzul" />
                    <a class="linkNoticias" href="https://www.dn.senac.br/unidades-do-senac-atividades-suspensas/"
                        target="blank">Veja a situação das
                        unidades do Senac no RS</a>
                </div>
            </nav>
            <div id="divCursosImg">
                <a href="./PSG/index.php"><img id="imgCursos" src="./img/card_cursos_gratuitos.jpeg"
                        title="Clique aqui para ver sobre os cursos gratuitos"></a>
            </div>
        </section>
        <br />

        <!-- Fim do Corpo da pagina -->
        <footer id="rodape">

            <hr id="hrRodapeSup" />

            <p class="pCenter"><img id="logoSenacInf" src="./img/senac_logo.png" title="Senac RS" width="150"
                    height="auto"></p>

            <p id="direitos">© Todos os Direitos Reservados - 2024.</p>
        </footer>
    </main>
</body>

</html>
<?php
ob_end_flush();

?>