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
                    <?php
                    session_start();
                    ?>
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
                        <li>
                            <a href="consulta.php">Consultar</a>
                        </li>
                        <li>
                            <?php

                            if (isset($_SESSION["nome_usu_sessao"])) {
                                echo "<p id='user'> " . $_SESSION['nome_usu_sessao'] . "</p>";
                                if (isset($_GET['logout'])) {
                                    session_destroy();
                                    echo "<script language='javascript' type='text/javascript'>
			 	                            window.location.href='../index.php';
			 	                        </script>";
                                }
                                if (isset($_SESSION["cargo_usu_sessao"]) == 'ADM') {
                                    echo '
                                    <ul>
                                        <li>
                                            <a href="adm.php">Administração</a>
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
        <div class="divImgCursos"><img class="imgCardCursos" src="../img/tecnico_dev.jpg"></div>

        <p class="tituloEsq">Curso Técnico em Desenvolvimento de Sistemas</p>
        <p class="horasCursos">1216H</p>

        <hr class="hr"/>

        <p class="textCursos">
            Com ele, você terá a qualificação necessária para atuar na área de desenvolvimento, com um grande
            diferencial: a
            habilidade comunicacional em língua inglesa, para falar com um mercado cada dia mais globalizado.
        </p>
        <p class="textCursos">
            A área de
            desenvolvimento de sistemas emprega milhares de pessoas todos os dias e muitas das vagas não são supridas
            por
            falta de talentos. Segundo a Brasscom, Associação das Empresas de Tecnologia da Informação e Comunicação
            (TIC) e
            de Tecnologias Digitais, o segmento deverá precisar de 70 mil profissionais por ano, até 2024.
            Chegou a sua vez!
        </p>
        <p class="textCursos">
            Com 1.216 horas, o curso prepara o profissional para desenvolver sistemas computacionais utilizando o
            ambiente
            de desenvolvimento, seguindo as normas e especificações da lógica e das linguagens de programação bem como a
            modelagem, implementação e manutenção do banco de dados. Além disso, a formação prepara para o
            desenvolvimento,
            a manutenção e testes de programas de computador, adotando normas técnicas e de qualidade. Apesar de o curso
            ser
            bilíngue, o aluno não precisa saber inglês para ingressar.
        </p>
        <p class="textCursos">
            As aulas de inglês são ministradas de acordo com o
            andamento do conteúdo tecnológico e, dessa forma, são trabalhadas a fala, escrita e leitura relacionadas à
            profissão. Assim, você estará preparado para atuar em diversas frentes de trabalho, podendo empreender na
            área
            ou buscar seu primeiro estágio já nos primeiros meses de curso.
        </p>
        <p class="textCursos">
            A qualificação é uma excelente oportunidade
            para
            ingressar no mercado de trabalho, com muitas possibilidades de atuação. Venha para o Técnico em
            Desenvolvimento
            de Sistemas - Bilíngue do Senac-RS.
        </p>

        <hr class="hr">
        <p class="titulo">Turmas Disponíveis</p>

        <div class="divImgTurmas"><img class="imgTurmas" src="../img/tec_dev_dia.png"></div>
        <div class="divImgTurmas"> <img class="imgTurmas" src="../img/tec_dev_noite.png"></div>
        
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