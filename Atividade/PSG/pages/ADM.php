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

</head>

<body>
  <p class="p1">
    <a href="../index.html">
      <img src="../img/senac_logo_new.png" alt="Logotipo SenacRS" title="Logotipo SenacRS" />
    </a>
  </p>
  <p class="p1">
    <a class="linkRedes" href="https://www.facebook.com/senacrsoficial" target="blank">
      <img class="imgRedes" src="../img/icon_facebook.png" alt="Rede social Facebook" title="Rede social Facebook" />
    </a>
    <a class="linkRedes" href="https://www.instagram.com/senacrs/" target="blank">
      <img class="imgRedes" src="../img/icon_instagram.png" alt="Rede social Instagram" title="Rede social Instagram" />
    </a>
    <a class="linkRedes" href="https://x.com/senacrs" target="blank">
      <img class="imgRedes" src="../img/icon_twitter.png" alt="Rede social X-Twitter" title="Rede social X-Twitter" />
    </a>
    <a class="linkRedes"
      href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGjNOZytbRLdwAAAZCDGdKQorc6a1HY6F3qjme8z6BVRLg3Kf_kVJ6e2WdIWIQaf8cRxOiTYKMz4bfZdnAKle3AQRelQP4NsP7sHBP37X7E5DOoOr4lQF2mPZUvO0avML2F1HE=&original_referer=https://www.senacrs.com.br/&sessionRedirect=https%3A%2F%2Fbr.linkedin.com%2Fschool%2Fsenac-rs%2F"
      target="blank">
      <img class="imgRedes" src="../img/icon_linkedin.png" alt="Rede social Linkedin" title="Rede social Linkedin" />
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
          header("location: inscrever.php");
        }
        if (isset($_SESSION["nome_usu_sessao"]) && ($_SESSION['cargo_usu_sessao']) == 'ADM') {
          echo "<a href='./ADM.php'> Administração | </a>  
          <a href='consultaFaleConosco.php'>Fale Conosco | </a> ";
        }
        echo "<a href='inscrever.php?logout'>Logout</a> ";

        echo "</p>";
      } else {
        echo '<a href="./login.html">Logar</a>';
      }

      echo "</p>";
      ?>
    </div>
  </div>
  <hr id="hr2" />
  <img id="imgBanner" src="../img/banner_programa.jpg" alt="Banner Programa" title="Banner programa Senac gratuidade" />
  <div id="formulario">
    <?php
    include '../php/conexaoLogin.php';
    if (isset($_POST['edit_user'])) {
      $id = $_POST['id'];
      $nomeCompleto = $_POST['nomeCompleto'];
      $email = $_POST['email'];
      $cargo = strtoupper($_POST['cargo']);

      $sql_update = "UPDATE meu_senac SET nomeCompleto='$nomeCompleto',email='$email',cargo='$cargo' WHERE id = $id";
      if ($conn->query($sql_update) === true) {
        echo "<script>
          alert('Usuário editado com sucesso!');
        </script>";
      } else {
        echo "<script>
			alert('Não foi possivel alterar usuário!');
			</script>";
      }
    }
    if (isset($_POST["delete_user"])) {
      $id = $_POST["id"];
      $sql_delete = "DELETE FROM meu_senac WHERE id = $id";
      if ($conn->query($sql_delete) === true) {
        echo "<script>
			alert('Usuário excluído com sucesso!');
			</script>";
      } else {
        echo "<script>
			alert('Não foi possível excluir usuário! ');
			</script>
      $conn->error";
      }
    }

    $sql = "SELECT id, nomeCompleto,email,cargo FROM meu_senac";
    $result = $conn->query($sql);
    if (isset($_SESSION["nome_usu_sessao"]) && ($_SESSION['cargo_usu_sessao']) == 'ADM') {
      echo '
	<h1 id="lista">Lista de usuários</h1>
	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Login</td>
        <td>Email</td>
				<td>Cargo</td>
				<td>Ação</td>
			</tr>
		</thead>';


      if ($result->num_rows > 0) {
        $linha = 0;
        while ($row = $result->fetch_assoc()) {
          $linha + 1;
          if ($linha % 2 == 0) {
            $linha = 1;
          } else {
            $linha = 2;
          }
          echo "<tbody id='linha$linha'>
            <tr>
							<form method='post'>
								<td >
								<input type='hidden' name='id' 
								value='" . $row["id"] . "'/>
								" . $row["id"] . "</td>
								<td>
								<input type='text' name='nomeCompleto' 
								value='" . $row["nomeCompleto"] . "'/>
								</td>
								<td>
								<input type='text' name='email' 
								value='" . $row["email"] . "'/>
								</td>
								<td>
								<input type='text' name='cargo' 
								value='" . $row["cargo"] . "'/>
								</td>
								<td>
								<button type='submit' name='edit_user'>
									Editar
								</button>
								<button type='submit' name='delete_user' 
								onclick='return confirm(\"Tem certeza 
								que deseja excluir este usuário?\")'>
									Excluir
								</button>
								</td>
							</form>					
						</tr>";
        }
      } else {
        echo "<tr>
					<td colspan='5'>
					Nenhum usuário encontrado!
					</td>
				</tr>";
      }
      $conn->close();
      echo '
		</tbody>	
	</table>
	<hr />
	<a href="../index.php">Voltar para tela inicial</a>
	
';
    }

    ?>
  </div>
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
      <img class="imgRedes" src="../img/icon_facebook.png" alt="Rede social Facebook" title="Rede social Facebook" />
    </a>
    <a class="linkRedes" href="https://www.instagram.com/senacrs/" target="blank">
      <img class="imgRedes" src="../img/icon_instagram.png" alt="Rede social Instagram" title="Rede social Instagram" />
    </a>
    <a class="linkRedes" href="https://x.com/senacrs" target="blank">
      <img class="imgRedes" src="../img/icon_twitter.png" alt="Rede social X-Twitter" title="Rede social X-Twitter" />
    </a>
    <a class="linkRedes"
      href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGjNOZytbRLdwAAAZCDGdKQorc6a1HY6F3qjme8z6BVRLg3Kf_kVJ6e2WdIWIQaf8cRxOiTYKMz4bfZdnAKle3AQRelQP4NsP7sHBP37X7E5DOoOr4lQF2mPZUvO0avML2F1HE=&original_referer=https://www.senacrs.com.br/&sessionRedirect=https%3A%2F%2Fbr.linkedin.com%2Fschool%2Fsenac-rs%2F"
      target="blank">
      <img class="imgRedes" src="../img/icon_linkedin.png" alt="Rede social Linkedin" title="Rede social Linkedin" />
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