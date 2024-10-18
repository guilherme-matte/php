<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Programa Senac Gratuidade</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="../css/formAdmin.css" />
    <link rel="stylesheet" type="text/css" href="../css/layout.css" />
    <link rel="stylesheet" type="text/css" href="../css/layout2.css" />


</head>

<body>
    <p class="p1">
        <a href="../index.html">
            <img src="../img/senac_logo_new.png" alt="Logotipo SenacRS" title="Logotipo SenacRS" />
        </a>
    </p>
    <p class="p1">
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
    <hr class="hr1" />
    <!--Menu do sistema -->
    <div id="divMenu">
        <h1 id='h2'>
            <a href="../index.php">Home</a>|
            <a href="./oprograma.php">O programa</a>|
            <a href="./inscrever.php">Como se inscrever</a>|
            <a href="./consulta.php">Consulta de vagas</a>|
            <a href="./perguntas.php">Perguntas frequentes</a>|
            <a href="./fale_conosco.php">Fale Conosco</a>|
            <a href="../../Senac_Tech/index.php">Senac Tech</a>
            


        </h1>
        <div id="divUsuarioLogado">
            <?php
            session_start();
            echo "<p id='usuarioLogado'>";
            if (isset($_SESSION['nome_usu_sessao'])) {
                echo " Olá " . $_SESSION['nome_usu_sessao'];
                echo "<br/>";
                if (isset($_GET["logout"])) {
                    session_destroy();
                    header("location: oprograma.php");
                }
                if (isset($_SESSION["nome_usu_sessao"]) && ($_SESSION['cargo_usu_sessao']) === 'ADM') {
                    echo "<a href='ADM.php'> Administração | </a> 
                    <a href='consultaFaleConosco.php'>Fale Conosco | </a> ";
                }
                echo "<a href='oprograma.php?logout'>Logout</a> ";

                echo "</p>";
            } else {
                echo '<a href="./login.html">Logar</a>';
            }

            echo "</p>";
            ?>
        </div>
    </div>
    <hr id="hr2" />
    <img id="imgBanner" src="../img/banner_programa.jpg" alt="Banner Programa"
        title="Banner programa Senac gratuidade" />

    <?php
    include '../../Senac_Tech/php_senac_tech/conexao.php';
    $conexao = new Conexao();

    $consulta = $conexao->consultaFaleConoscoPSG();
    
    echo '<hr class="hr" />';


    if (isset($_POST['edit_user'])) {
        $conexao->alterarFaleConoscoPSG($_POST['id'],$_POST['nome'],$_POST['sobrenome'],$_POST['dataNasc'],$_POST['endereco'],$_POST['bairro'],$_POST['cidade'],$_POST['estado'],$_POST['sexo'],$_POST['fone'],$_POST['email'],$_POST['obs'],);
        echo
            "<script language='javascript' type='text/javascript'>"
            . "window.location.href='../pages/consultaFaleConosco.php'"
            . "</script>";
    }
    if (isset($_POST["delete_user"])) {
        $conexao->deletarFaleConoscoPSG($_POST['id']);
        echo
            "<script language='javascript' type='text/javascript'>"
            . "window.location.href='../pages/consultaFaleConosco.php'"
            . "</script>";
    }
    //$result = $conexao->listar();
    if (isset($_SESSION["nome_usu_sessao"]) && ($_SESSION['cargo_usu_sessao']) == 'ADM') {
        echo '<h1 id="lista">Consulta Fale Conosco</h1>';
        while ($linha = $consulta->fetch_assoc()) {
            $id = $linha['id'];
            $nome = $linha['nome'];
            $sobrenome = $linha['sobrenome'];
            $dataNasc = $linha['dataNasc'];
            $endereco = $linha['endereco'];
            $bairro = $linha['bairro'];
            $cidade = $linha['cidade'];
            $estado = $linha['estado'];
            $sexo = $linha['sexo'];
            $fone = $linha['fone'];
            $email = $linha['email'];
            $obs = $linha['obs'];
            $linhaTabela = 0;

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
                    <td>sobrenome</td>
                    <td>Nascimento</td>
                    <td>Endereço</td>
                    <td>Bairro</td>        
                   
    
                </tr>
            </thead>';
            echo
                "<tbody id='linha$linhaTabela'>
                        <tr>
							<form method='post'>
								<td >
								<input type='hidden' name='id' 
								value='" . $linha["id"] . "'/>
								" . $linha["id"] . "</td>
								<td>
								<input type='text' name='nome' 
								value='" . $linha["nome"] . "'/>
								</td>
                                <td>
								<input type='text' name='sobrenome' 
								value='" . $linha["sobrenome"] . "'/>
								</td>
                                
                                <td>
								<input type='date' name='dataNasc' 
								value='" . $linha["dataNasc"] . "'/>
								</td>
								<td>
								<input type='text' name='endereco' 
								value='" . $linha["endereco"] . "'/>
								</td>
								<td>
								<input type='text' name='bairro' 
								value='" . $linha["bairro"] . "'/>
								</td>

                                </tr>
                                <tr>
                                <td>Cidade</td>
                                <td>Estado</td>
                                <td>Sexo</td>
                                <td>Telefone</td>
                                <td>Email</td>
                                <td>Obs</td>
                                <td>Ação</td>
                                </tr>
                                <tr>
                                <td>
								<input type='text' name='cidade' 
								value='" . $linha["cidade"] . "'/>
								</td>
                                <td>
								<input type='text' name='estado' 
								value='" . $linha["estado"] . "'/>
								</td>
                                <td>
								<input type='text' name='sexo' 
								value='" . $linha["sexo"] . "'/>
								</td>
                                <td>
								<input type='text' name='fone' 
								value='" . $linha["fone"] . "'/>
								</td>
                                <td>
								<input type='text' name='email' 
								value='" . $linha["email"] . "'/>
								</td>
                                <td>
								<input type='text' name='obs' 
								value='" . $linha["obs"] . "'/>
								</td>

								<td id='botoes'>
								<button type='submit' name='edit_user'>
									Editar
								</button>
								<button type='submit' name='delete_user' 
								onclick='return confirm(\"Tem certeza 
								que deseja excluir este usuário?\")'>
									Excluir
								</button>
                                </tr>
								</td>
							
                                </form>";
            echo '
		</tbody>	
	</table>';
    echo'<hr>';
        }
    }
    echo '</div>';
    ?>

    <hr class="hr1" />
    <h2 id="h2">
        <a href="../index.html">Home</a>|
        <a href="./oprograma.html">O programa</a>|


        <a href="./inscrever.html">Como se inscrever</a>|
        <a href="./consulta.html">Consulta de vagas</a>|
        <a href="./perguntas.html">Perguntas frequentes</a>|
        <a href="./fale_conosco.html">Fale Conosco</a>
    </h2>
    <hr class="hr1" />
    <p class="p1">
        <img src="../img/senac_logo_new.png" alt="Logotipo Senac" title="logotipo Senac" />
    </p>
    <p class="p1">
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
    <p id="pDireitos">© Todos os Direitos Reservados - 2024.</p>
</body>

</html>