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
                        if (isset($_SESSION['cargo_usu_sessao']) == 'ADM') {
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

                                if (isset($_SESSION["cargo_usu_sessao"]) == 'ADM') {
                                    echo '
                                    <ul>
                                        <li>
                                            <a href="adm.php">Administração</a>
                                            <a href="cursos_informatica.php?logout">Sair</a>
                                        </li>
                                    </ul>';
                                } else {
                                    echo '
                                    <ul>
                                        <li>
                                            <a href="cursos_informatica.php?logout">Sair</a>
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
        <div class="divImgCursos"> <img class="imgCardCursos" src="../img/tecnico_informatica.png"
                title="Técnico de Informática">
        </div>
        <p class="tituloEsq">Curso Técnico de Informática</p>
        <br>

        <p class="horasCursos">1200H </p>

        <br>

        <!-- <hr class="hr"> -->
        <p class="textCursos">
            A formação vai te preparar para fazer o planejamento e pela execução dos processos de manutenção de
            computadores
            e pela operação de redes locais de computadores. Além de, desenvolver aplicativos computacionais, adotando
            normas técnicas, de qualidade, de saúde, de segurança do trabalho e preservação ambiental no desempenho de
            sua
            função.
        </p>
        <p class="textCursos">
            Por meio de uma proposta pedagógica adequada às exigências do mundo profissional, o curso oferece nos
            momentos
            presenciais* uma aprendizagem pautada por metodologias que propiciam atuação por projetos, aulas práticas,
            teóricas, vivenciais e flexíveis com foco no mercado de trabalho. Mas também, momentos mediados por
            tecnologia, em uma plataforma educacional própria, com conteúdos produzidos por tutores altamente
            qualificados. Ambos os modos estimulam você a experimentar habilidades necessárias para os profissionais do
            futuro.
        </p>
        <p class="textCursos">
            Acompanhe a distribuição da carga-horária do currículo:
        </p>
        <p class="textCursos">
            Total de horas do curso: 1.200h
        </p>
        <p class="textCursos">
            - Momentos presenciais*: 996h
        </p>
        <p class="textCursos">
            - Momentos mediados por tecnologias com tutoria ativa**: 204h (no formato EAD - Educação a Distância)
        </p>
        <p class="textCursos">
            Ao final da formação você estará apto a atuar em empresas de diversos segmentos, além de poder participar de
            concursos em organizações públicas.
        </p>
        <p class="textCursos">
            Gostou da ideia de ser um profissional completo da área de Informática? Venha para o curso Técnico em
            Informática e mude de vida.
        </p>
        <hr class="hr">
        <p class="titulo"> Turmas Disponiveis</p>

        <div class="divImgTurmas"><img class="imgTurmas" src="../img/tec_inf_turma_manha.png"></div>


        <div class="divImgTurmas"><img class="imgTurmas" src="../img/tec_inf_turma_noite.png"></div>
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