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
            echo "<a href='./pages/ADM.php'> Administração | </a>  ";
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
    <h1 class="h2">O programa Senac Gratuidade</h1>
    <p class="pText">
      O que é o PSG.
      <!--Tag strong coloca texto em destaque -->
    </p>
    <p class="pText">
      <!--Tag em coloca texto em itálico -->
      <img id="imgAprendiz" src="../img/corte.jpg" />
      Firmado em 22 de julho de 2008 entre o Ministério da Educação, o
      Ministério do Trabalho, o Ministério da Fazenda, a Confederação Nacional
      do Comércio de Bens, Serviços e Turismo - CNC e o Senac, e ratificado pelo
      Decreto nº 6.633, de 5 de novembro de 2008 , o Programa Senac de
      Gratuidade – PSG tem por objetivo garantir o acesso à educação
      profissional de qualidade para pessoas cuja renda familiar mensal per
      capita não ultrapasse dois salários mínimos.
      <br />
      Pelo acordo celebrado, o Senac investe, desde 2014, 66,67% de sua Receita
      Líquida de Contribuição nesse importante programa de educação inclusiva.
    </p>
    <p class="p1">
      <img
        id="imgBannerPsg"
        src="../img/card_cursos.jpg"
        alt="Banner cursos gratuitos"
        title="Banner sobre os cursos gratuitos"
      />
    </p>
    <h1 class="h2">Regulamento</h1>
    <p class="pJustify">
      Conheça as formas de divulgação, inscrição e matrícula no PSG, tipos da
      oferta de educação profissional, metodologia do cálculo do gasto médio
      aluno/hora-aula, contabilização da gratuidade, regras para elaboração do
      plano de aplicação e retificativo, formas de registro dos dados da
      produção e indicadores utilizados no processo de avaliação das pesquisas.
    </p>
    <h2 class="p1">
      <a href="../pdf/diretrizes.pdf" target="blank">Diretrizes</a>
    </h2>
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
