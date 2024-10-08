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
        <link rel="stylesheet" type="text/css" href="../css/consulta.css" />

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

                                <a href="../index.html">Home</a>

                            </li>

                            <li>

                                <a href="../pages/cursos.html">Cursos</a>
                                <ul>
                                    <li>
                                        <a href="./cursos_informatica.html">Téc em Informática</a>
                                    </li>
                                    <li>
                                        <a href="./cursos_administracao.html">Administração</a>
                                    </li>
                                    <li>
                                        <a href="./cursos_desenvolvimento.html">Desenvolvimento</a>
                                    </li>
                                    <li>
                                        <a href="./RS_TI.html">Programa - RS-TI</a>
                                    </li>
                                    <li>
                                        <a href="./aprendizagem.html">Programa - Aprendizagem</a>
                                    </li>
                                    <li>
                                        <a href="./cursos.html#livres">Cursos Livres</a>
                                    </li>

                                </ul>
                            </li>

                            <li>

                                <a href="../pages/faleconosco.html">Fale Conosco</a>

                            </li>
                            <li>

                                <a href="../pages/meu_senac.html">Meu Senac</a>

                            </li>
                            <li>

                                <a href="../pages/localizacao.html">Localização</a>

                            </li>

                            <li>

                                <a href="../PSG/index.html">PSG</a>
                            </li>
                            <li>
                                <a href="../pages/consulta.php">Consultar</a>
                            </li>
                        </ul>
                    </nav>

                    <!-- </div> -->
                    <hr id="hrCabecalhoInf" />

                </section>

            </header>
            <!-- Corpo da pagina -->
            <div class="botoes">
                <a href="#faleConosco" class="btConsultas">Fale Conosco</a>
                <a href="#meuSenac" class="btConsultas">Meu Senac</a>

                
            </div>

            <?php
            include '../php_senac_tech/conexao.php';
            $conexao = new Conexao();

            $consulta = $conexao->consultaFaleConosco();
            echo '<div id="faleConosco" class="faleConosco">';
            echo '<p class="titulo">
                Consulta Fale Conosco
                </p>';

            while ($linha = $consulta->fetch_assoc()) {
                $id = $linha['id'];
                $nomeCompleto = $linha['nomeCompleto'];
                $uf = $linha['uf'];
                $cidade = $linha['cidade'];
                $email = $linha['email'];
                $telefone = $linha['telefone'];
                $modalidade = $linha['modalidade'];
                $assunto = $linha['assunto'];
                $mensagem = $linha['mensagem'];
                $cpf = $linha['cpf'];

                echo '<hr class="hr" />';

                echo '<p class="pId">Chamado ' . $id . ' </p>';
                echo '<p class="pLeft">- Nome Completo: ' . $nomeCompleto . ' -</p>';
                echo '<p class="pLeft">- CPF: ' . $cpf . ' -</p>';
                echo '<p class="pLeft">- Email: ' . $email . ' -</p>';
                echo '<p class="pLeft">- Telefone: ' . $telefone . ' -</p>';
                echo '<p class="pLeft">- UF: ' . $uf . '-</p>';
                echo '<p class="pLeft">- Municipio: ' . $cidade . ' -</p>';
                echo '<p class="pLeft">- Modalidade: ' . $modalidade . ' -</p>';
                echo '<p class="pLeft">- Assunto: ' . $assunto . ' -</p>';
                echo '<p class="pLeft">- Mensagem: </p>';
                echo '<p class="pMensagem">' . $mensagem . '</p>';
            }
            echo '</div>';
            ?>
            <!-- Fim do Corpo da pagina -->
            <footer id="rodape">

                <hr id="hrRodapeSup" />

                <p class="pCenter"><img id="logoSenacInf" src="../img/senac_logo.png" title="Senac RS"></p>

                <p id="direitos">© Todos os Direitos Reservados - 2024.</p>
            </footer>
        </main>
    </body>

</html>