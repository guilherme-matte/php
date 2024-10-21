<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Programa Senac Gratuidade</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
  </head>
  <body>
    <p class="p1">
      <a href="../index.html">
        <img
          src="../img/senac_logo_new.png"
          alt="Logotipo SenacRS"
          title="Logotipo SenacRS"
        />
      </a>
    </p>
    <p class="p1">
      <a
        class="linkRedes"
        href="https://www.facebook.com/senacrsoficial"
        target="blank"
      >
        <img
          class="imgRedes"
          src="../img/icon_facebook.png"
          alt="Rede social Facebook"
          title="Rede social Facebook"
        />
      </a>
      <a
        class="linkRedes"
        href="https://www.instagram.com/senacrs/"
        target="blank"
      >
        <img
          class="imgRedes"
          src="../img/icon_instagram.png"
          alt="Rede social Instagram"
          title="Rede social Instagram"
        />
      </a>
      <a class="linkRedes" href="https://x.com/senacrs" target="blank">
        <img
          class="imgRedes"
          src="../img/icon_twitter.png"
          alt="Rede social X-Twitter"
          title="Rede social X-Twitter"
        />
      </a>
      <a
        class="linkRedes"
        href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGjNOZytbRLdwAAAZCDGdKQorc6a1HY6F3qjme8z6BVRLg3Kf_kVJ6e2WdIWIQaf8cRxOiTYKMz4bfZdnAKle3AQRelQP4NsP7sHBP37X7E5DOoOr4lQF2mPZUvO0avML2F1HE=&original_referer=https://www.senacrs.com.br/&sessionRedirect=https%3A%2F%2Fbr.linkedin.com%2Fschool%2Fsenac-rs%2F"
        target="blank"
      >
        <img
          class="imgRedes"
          src="../img/icon_linkedin.png"
          alt="Rede social Linkedin"
          title="Rede social Linkedin"
        />
      </a>
      <a
        class="linkRedes"
        href="https://www.youtube.com/senacrsoficial"
        target="blank"
      >
        <img
          class="imgRedes"
          src="../img/icon_youtube.png"
          alt="Canal Youtube"
          title="Canal Youtube"
        />
      </a>
      <a
        class="linkRedes"
        href="https://open.spotify.com/user/oe434380olmwip17xaxyjb0bc"
        target="blank"
      >
        <img
          class="imgRedes"
          src="../img/icon_spotify.png"
          alt="Canal Spotify"
          title="Canal Spotify"
        />
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
    <img
      id="imgBanner"
      src="../img/banner_programa.jpg"
      alt="Banner Programa"
      title="Banner programa Senac gratuidade"
    />

    <h1 class="h2">Como se inscrever</h1>
    <p class="p1">
      <img
        id="imgBannerInscricao"
        src="../img/incricao.png"
        alt="Como se inscrever"
        title="Inscrição no computador"
      />
    </p>
    <p class="pJustify">
      O ingresso nos cursos do PSG se dá por ordem de inscrição do candidato.
      Portanto acompanhe a divulgação dos cursos e programações do Senac de seu
      estado e conheça a oferta de vagas gratuitas em unidades mais próximas.
      <br />
      Para realizar a sua inscrição você deve estar atento a documentação
      necessária, segundo o curso escolhido.
      <br />
      No ato da inscrição, o interessado preencherá a “Ficha de Inscrição” com
      informações pessoais e será informado dos documentos necessários, data e
      local para efetivação da sua matrícula. Fique atento! A não apresentação
      de quaisquer dos documentos exigidos, importará no cancelamento da
      inscrição.
      <br />
      A inscrição direta do interessado não se aplica aos cursos de Aprendizagem
      Profissional Comercial, pois por determinação da legislação e normas
      vigentes, essa inscrição deve ser feita pelo empregador.
    </p>
    <h2 id="h3">
      Dúvidas sobre o programa Senac gratuidade, procure a nossa unidade Senac
      Tech para mais informações.
    </h2>
    <p class="pText">
      Av. Venancio Aires 93, Porto Alegre, RS.
      <br />
      Telefone: (51) 3288-7750
      <br />
      Site: senacrs.com.br
      <br />
      E-mail: pdgtech@senacrs.com.br
    </p>
    <p class="p1">
      <iframe
        id="iframeMaps"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.791777190024!2d-51.22147318985053!3d-30.042831031095265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978567f17f28d%3A0x2c2c5272bacf4d3a!2sSenac%20Tech!5e0!3m2!1spt-BR!2sbr!4v1720190459067!5m2!1spt-BR!2sbr"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </p>

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
      <img
        src="../img/senac_logo_new.png"
        alt="Logotipo Senac"
        title="logotipo Senac"
      />
    </p>
    <p class="p1">
      <a
        class="linkRedes"
        href="https://www.facebook.com/senacrsoficial"
        target="blank"
      >
        <img
          class="imgRedes"
          src="../img/icon_facebook.png"
          alt="Rede social Facebook"
          title="Rede social Facebook"
        />
      </a>
      <a
        class="linkRedes"
        href="https://www.instagram.com/senacrs/"
        target="blank"
      >
        <img
          class="imgRedes"
          src="../img/icon_instagram.png"
          alt="Rede social Instagram"
          title="Rede social Instagram"
        />
      </a>
      <a class="linkRedes" href="https://x.com/senacrs" target="blank">
        <img
          class="imgRedes"
          src="../img/icon_twitter.png"
          alt="Rede social X-Twitter"
          title="Rede social X-Twitter"
        />
      </a>
      <a
        class="linkRedes"
        href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGjNOZytbRLdwAAAZCDGdKQorc6a1HY6F3qjme8z6BVRLg3Kf_kVJ6e2WdIWIQaf8cRxOiTYKMz4bfZdnAKle3AQRelQP4NsP7sHBP37X7E5DOoOr4lQF2mPZUvO0avML2F1HE=&original_referer=https://www.senacrs.com.br/&sessionRedirect=https%3A%2F%2Fbr.linkedin.com%2Fschool%2Fsenac-rs%2F"
        target="blank"
      >
        <img
          class="imgRedes"
          src="../img/icon_linkedin.png"
          alt="Rede social Linkedin"
          title="Rede social Linkedin"
        />
      </a>
      <a
        class="linkRedes"
        href="https://www.youtube.com/senacrsoficial"
        target="blank"
      >
        <img
          class="imgRedes"
          src="../img/icon_youtube.png"
          alt="Canal Youtube"
          title="Canal Youtube"
        />
      </a>
      <a
        class="linkRedes"
        href="https://open.spotify.com/user/oe434380olmwip17xaxyjb0bc"
        target="blank"
      >
        <img
          class="imgRedes"
          src="../img/icon_spotify.png"
          alt="Canal Spotify"
          title="Canal Spotify"
        />
      </a>
    </p>
    <p id="pDireitos">© Todos os Direitos Reservados - 2024.</p>
  </body>
</html>
