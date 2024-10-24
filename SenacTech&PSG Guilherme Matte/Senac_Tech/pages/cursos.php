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
    <link rel="stylesheet" type="text/css" href="../css/layout.css" />
    <link rel="stylesheet" type="text/css" href="../css/menu.css" />
    <link rel="stylesheet" type="text/css" href="../css/cursos.css" />

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
                                            <a href="cursos.php?logout">Sair</a>
                                        </li>
                                    </ul>';
                                } else {
                                    echo '
                                    <ul>
                                        <li>
                                            <a href="cursos.php?logout">Sair</a>
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
        <img id="imgCursosTecnicos" src="../img/senac-tech-tecnicos.png" title="Cursos Técnicos">

        <section id="sectionCursosTecnicos">

            <p class="pTituloEsq">Técnico de Informática</p>

            <p class="pCursosTecnicos">

                A formação vai te preparar para fazer o planejamento e pela execução dos processos de manutenção de
                computadores
                e pela operação de redes locais de computadores. Além de, desenvolver aplicativos computacionais,
                adotando
                normas técnicas, de qualidade, de saúde, de segurança do trabalho e preservação ambiental no desempenho
                de
                sua
                função.
            <p class="pCursosTecnicosLink"> Para mais informações clique <a class="aCursosTecnicos"
                    href="./cursos_informatica.php">"AQUI"</a>!
            </p>

            </p>

            <hr class="hrCursos">

            <p class="pTituloEsq">Técnico em Administração</p>

            <p class="pCursosTecnicos">

                Você busca uma oportunidade de inserção no mercado de trabalho? A área Administrativa fascina você?
                Gostaria
                de
                agregar conhecimentos fundamentais para os mais diversos segmentos empresariais? Se as respostas forem
                sim,
                o
                curso Técnico em Administração do Senac-RS foi feito para você!

            <p class="pCursosTecnicosLink"> Para mais informações clique <a class="aCursosTecnicos"
                    href="./cursos_administracao.php">"AQUI"</a>!

            </p>

            </p>

            <hr class="hrCursos">

            <p class="pTituloEsq">Técnico em Desenvolvimento de Sistemas</p>


            <p class="pCursosTecnicos">

                O desenvolvimento de novas soluções lhe desafia? Você gostaria de trabalhar em uma multinacional? O
                curso
                Técnico em Desenvolvimento de Sistemas - Bilíngue pode ser o primeiro passo para você realizar esses
                sonhos.

            <p class="pCursosTecnicosLink"> Para mais informações clique <a class="aCursosTecnicos"
                    href="./cursos_desenvolvimento.php">"AQUI"</a>!

            </p>

            </p>

            <hr class="hrCursos">

            <p class="pTituloEsq">Conheça sobre o Programa RS Ti</p>

            <p class="pCursosTecnicos">
                Capacitamos profissionais para a área de TECNOLOGIA DA INFORMAÇÃO e os conectamos às oportunidades
                de trabalho das
                empresas parceiras
            </p>

            <p class="pCursosTecnicosLink"> Para mais informações clique <a class="aCursosTecnicos"
                    href="./RS_TI.php">"AQUI"</a>!
            </p>

            <hr class="hrCursos">

            <p class="pTituloEsq">Conheça sobre o Programa Aprendizagem</p>


            <p class="pCursosTecnicos">
                Com o Programa Senac de Aprendizagem, você pode contratar jovens talentos e ajudar na educação
                profissional.

            </p>
            <p class="pCursosTecnicosLink"> Para mais informações clique <a class="aCursosTecnicos"
                    href="./aprendizagem.php">"AQUI"</a>!
            </p>
            <br />
            <hr class="hrCursos" />
            <br />
        </section>
        <section id="sectionCursosLivres">
            <p class="titulo" id="livres">Cursos Livres</p>
            <br /><br />
            <p class="pTituloCentro">INTRODUÇÃO À GASTRONOMIA - 1º ANO</p>
            <div class="divImgCursosLivres"><img class="imgCursosLivres" src="../img/curso_gastronomia.jpeg" alt="">
            </div>
            <p class="pCursosTecnicos">
                Uma excelente opção de curso para quem busca conhecer as profissões da gastronomia ou para melhorar suas
                habilidades da cozinha no dia a dia.
                Conheça à gastronomia com esse curso surpreendente. Venha para o Senac-RS fazer o curso de Introdução à
                Gastronomia.

            </p>

            <p class="pCenter"><button class="botao">Selecionar</button></p>
            <hr class="hrCursos">
            <p class="pTituloCentro">DESENVOLVIMENTO WEB - FRONT END</p>
            <div class="divImgCursosLivres"><img class="imgCursosLivres" src="../img/curso_frontend.jpeg" alt=""></div>

            <p class="pCursosTecnicos">
                Esteja pronto para atender as exigências do mercado de trabalho. Venha fazer o curso de Desenvolvimento
                web
                –
                front end do Senac-RS.
            </p>
            <p class="pCenter"><button class="botao">Selecionar</button></p>
            <hr class="hrCursos" />

            <p class="pTituloCentro">Excel Avançado</p>
            <div class="divImgCursosLivres"><img class="imgCursosLivres" src="../img/curso_excel.jpeg" alt=""></div>

            <p class="pCursosTecnicos">
                Faça o curso de Excel Avançado e se torne um profissional que busca agilidade nos processos de trabalho,
                facilitando o controle do negócio!
            </p>
            <p class="pCenter"><button class="botao">Selecionar</button></p>
            <hr class="hrCursos" />

            <p class="pTituloCentro">INFORMÁTICA - KIDS</p>
            <div class="divImgCursosLivres"><img class="imgCursosLivres" src="../img/curso_informaticakids.jpg" alt="">
            </div>

            <p class="pCursosTecnicos">
                O Senac-RS está esperando o público kids para capacitar em Informática Intensivo – Kids.
            </p>
            <p class="pCenter"><button class="botao">Selecionar</button></p>
            <hr class="hrCursos" />
            <p class="pTituloCentro">FORMAÇÃO INSTRUTOR DE TRÂNSITO</p>
            <div class="divImgCursosLivres"><img class="imgCursosLivres" src="../img/curso_instrutor.jpeg" alt=""></div>

            <p class="pCursosTecnicos">
                Venha ser um Instrutores de Trânsito credenciado. Conheça o Curso de Formação de Instrutores de Trânsito
                do
                Senac-RS.
            </p>
            <p class="pCenter"><button class="botao">Selecionar</button></p>
            <hr class="hrCursos" />
            <p class="pTituloCentro">ASSISTENTE ADMINISTRATIVO</p>
            <div class="divImgCursosLivres"><img class="imgCursosLivres" src="../img/curso_assistente.jpeg" alt="">
            </div>

            <p class="pCursosTecnicos">
                O assistente administrativo é necessário em organizações de todos os tamanhos, sendo que esse
                profissional
                pode
                atuar em empresas públicas e privadas, além de empreender como assistente autônomo. Esteja preparado
                para as
                oportunidades em áreas administrativas: venha para o Senac-RS e torne-se um profissional da área de
                Administração.
            </p>
            <p class="pCenter"><button class="botao">Selecionar</button></p>
            <hr class="hrCursos" />
            <p class="pTituloCentro">Gestão Financeira</p>
            <div class="divImgCursosLivres"><img class="imgCursosLivres" src="../img/curso_gestao.jpeg" alt=""></div>

            <p class="pCursosTecnicos">
                Faça parte do time de profissionais qualificados e dedique este tempo para alavancar a sua carreira com
                o
                curso
                do Senac-RS!
            </p>
            <p class="pCenter"><button class="botao">Selecionar</button></p>
        </section>
        <!-- Fim do Corpo da pagina -->
        <footer id="rodape">

            <hr id="hrRodapeSup" />

            <p class="pCenter"><img id="logoSenacInf" src="../img/senac_logo.png" title="Senac RS" width="150"
                    height="auto"></p>

            <p id="direitos">© Todos os Direitos Reservados - 2024.</p>
        </footer>
    </main>
</body>

</html>
<?php
ob_end_flush();

?>