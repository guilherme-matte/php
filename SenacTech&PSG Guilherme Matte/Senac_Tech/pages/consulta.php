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
    <link rel="stylesheet" type="text/css" href="../css/consulta.css" />
    <link rel="stylesheet" type="text/css" href="../css/formTabelaFaleConosco.css" />

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
                                            <a href="consulta.php?logout">Sair</a>
                                        </li>
                                    </ul>';
                                } else {
                                    echo '
                                    <ul>
                                        <li>
                                            <a href="consulta.php?logout">Sair</a>
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


        <?php
        include '../php_senac_tech/conexao.php';
        $conexao = new Conexao();
        if (isset($_POST['edit_user'])) {
            $conexao->alterarFaleConosco($_POST['id'], $_POST['nomeCompleto'], $_POST['cpf'], $_POST['uf'], $_POST['cidade'], $_POST['email'], $_POST['telefone'], $_POST['modalidade'], $_POST['assunto'], $_POST['mensagem']);
        }
        if (isset($_POST["delete_user"])) {
            $conexao->deletarFaleConosco($_POST['id']);
        }
        $consulta = $conexao->consultaFaleConosco();


        echo '<div id="faleConosco" class="consulta">';
        echo '<p class="titulo">
                Consulta Fale Conosco
                </p>';
        $linhaTabela = 0;
        if (isset($_SESSION["nome_usu_sessao"]) && ($_SESSION['cargo_usu_sessao']) == 'ADM') {
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



                $linhaTabela + 1;
                if ($linhaTabela % 2 == 0) {
                    $linhaTabela = 1;
                } else {
                    $linhaTabela = 2;
                }

                echo '
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>CPF</td>
                    <td>Estado</td>
                    <td>Cidade</td>
                    <td>Email</td>
                    <td>Telefone</td>
                    <td>Modalidade</td>
                    <td>Assunto</td>
                    <td>Ação</td>
    
                </tr>
            </thead>';
                echo
                "<tbody id='linha$linhaTabela'>
                        <tr id='campos'>
							<form method='post'>
								<td >
								<input type='hidden' name='id' 
								value='" . $linha["id"] . "'/>
								" . $linha["id"] . "</td>
								<td>
								<input type='text' name='nomeCompleto' 
								value='" . $linha["nomeCompleto"] . "'/>
								</td>
                                <td>
								<input type='text' name='cpf' 
								value='" . $linha["cpf"] . "'/>
								</td>
                                <td>
								<input type='text' name='uf' 
								value='" . $linha["uf"] . "'/>
								</td>
								<td>
								<input type='text' name='cidade' 
								value='" . $linha["cidade"] . "'/>
								</td>
								<td>
								<input type='text' name='email' 
								value='" . $linha["email"] . "'/>
								</td>
                                <td>
								<input type='text' name='telefone' 
								value='" . $linha["telefone"] . "'/>
								</td>
                                <td>
								<input type='text' name='modalidade' 
								value='" . $linha["modalidade"] . "'/>
								</td>
                                <td>
								<input type='text' name='assunto' 
								value='" . $linha["assunto"] . "'/>
								</td>
                                

								<td  id=tdBotao>
                                <div id='botoes'>
								<button type='submit' name='edit_user'>
									Editar
								</button>
								<button type='submit' name='delete_user' 
								onclick='return confirm(\"Tem certeza 
								que deseja excluir este usuário?\")'>
									Excluir
								</button>
								</td>
                                <tr >
                                <td id='mensagemTd' colspan='10'>
                                    <textarea name='mensagem' cols='150' rows='20' id='mensagemText'>" . $linha["mensagem"] . "</textarea>
								</td>
                                </tr>
							</form>					
						</tr>";




                echo '
		</tbody>	
	</table>';



                // echo '<p class="pId">Chamado ' . $id . ' </p>';
                // echo '<p class="pLeft">- Nome Completo: ' . $nomeCompleto . ' -</p>';
                // echo '<p class="pLeft">- CPF: ' . $cpf . ' -</p>';
                // echo '<p class="pLeft">- Email: ' . $email . ' -</p>';
                // echo '<p class="pLeft">- Telefone: ' . $telefone . ' -</p>';
                // echo '<p class="pLeft">- UF: ' . $uf . '-</p>';
                // echo '<p class="pLeft">- Municipio: ' . $cidade . ' -</p>';
                // echo '<p class="pLeft">- Modalidade: ' . $modalidade . ' -</p>';
                // echo '<p class="pLeft">- Assunto: ' . $assunto . ' -</p>';
                // echo '<p class="pLeft">- Mensagem: </p>';
                // echo '<p class="pMensagem">' . $mensagem . '</p>';
            }
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
<?php
ob_end_flush();

?>