<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Programa Senac Gratuidade</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="../css/reset.css" />
  <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
  <link rel="stylesheet" type="text/css" href="../css/layout2.css" />
  <link rel="stylesheet" type="text/css" href="../css/formulario.css" />
</head>

<body>
  <main>
    <header>
      <section id="cabecalho">
        <div id="cabecalhoEsq">
          <p class="p1">
            <a href="../index.html">
              <img src="../img/senac_logo_new.png" alt="Logotipo SenacRS" title="Logotipo SenacRS" />
            </a>
          </p>
        </div>
        <div id="cabecalhoMeio">
          <p id="pCabecalhoMeio">Rio Grande do Sul</p>
        </div>

        <div id="cabecalhoDir">
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
        </div>
      </section>
    </header>
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
    <hr class="hr2" />

    <section id="sectionMeio">
      <article id="articleBannerSup">
        <img id="imgBanner" src="../img/banner_programa.jpg" alt="Banner Programa"
          title="Banner programa Senac gratuidade" />
      </article>
      <section id="sectionForms">
        <article id="articleForms">
          <p id="formP">Fale Conosco</p>
          <form action="../php/faleConosco.php" method="post">
            <fieldset>
              <fieldset class="bloco">
                <div class="dados">
                  <label>Nome:</label>
                  <input type="text" name="nome" required maxlength="20" size="30" />
                </div>
              </fieldset>

              <fieldset class="bloco">
                <div class="dados">
                  <label>Sobrenome:</label>
                  <input type="text" name="sobrenome" required size="30" maxlength="20" />
                </div>
              </fieldset>

              <fieldset class="bloco">
                <div class="dados">
                  <label>Data de nascimento:</label>
                  <input type="date" name="datanasc" required />
                </div>
              </fieldset>

              <fieldset class="bloco">
                <div class="dados">
                  <label>Endereço:</label>
                  <input type="text" name="endereco" required size="30" maxlength="30" />
                </div>
              </fieldset>

              <fieldset class="bloco">
                <div class="dados">
                  <label>Bairro:</label>
                  <input type="text" name="bairro" required size="30" maxlength="30" />
                </div>
              </fieldset>

              <fieldset class="bloco">
                <div class="dados">
                  <label>Cidade:</label>
                  <input type="text" name="cidade" required size="30" maxlength="30" />
                </div>
              </fieldset>

              <fieldset class="bloco">
                <div class="dados">
                  <label>Estado:</label>
                  <select name="estado" required>
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">
                      Mato Grosso do Sul
                    </option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Sul" selected>
                      Rio Grande do Sul
                    </option>
                    <option value="Rio Grande do Norte">
                      Rio Grande do Norte
                    </option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                  </select>
                </div>
              </fieldset>

              <fieldset class="bloco">
                <div class="dados">
                  <label>Sexo:</label>
                  <label>
                    <input type="radio" name="sexo" value="M" checked />Masculino
                    <input type="radio" name="sexo" value="F" />Feminino
                  </label>
                </div>
              </fieldset>
              <fieldset class="bloco">
                <div class="dados">
                  <label>Telefone:</label>
                  <input type="tel" name="telefone" required
                    title="o número deve conter 11 dígitos, começando pelo DDD" />
                </div>
              </fieldset>

              <fieldset class="bloco">
                <div class="dados">
                  <label>E-mail:</label>
                  <input type="email" name="email" required title="O formato do e-mail deve ser: nome@dominio.com"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                </div>
              </fieldset>

              <fieldset class="bloco">
                <div class="dados">
                  <label>Usúario:</label>
                  <input type="text" name="usuario" required />
                </div>
              </fieldset>

              <fieldset class="bloco">
                <div class="dados">
                  <label>Senha:</label>
                  <input type="password" name="senha" required
                    title="A senha deve conter no mínimo 8 caractéres, letra maiúscula, minúscula e número" />
                </div>
              </fieldset>

              <fieldset class="bloco">
                <div class="dados">
                  <label>Observação:</label>
                  <textarea name="obs" rows="6" cols="30" required></textarea>
                </div>
              </fieldset>
              <button type="submit" class="botao">Enviar</button>
            </fieldset>
            <!--fim fildset principal-->
          </form>
        </article>
      </section>

      <!--  
              <h1 align="center">Fale conosco</h1>
              <form action="../index.html" method="post">
                <table align="center" width="500" height="auto">
                  <thead>
                    <tr>
                      <td colspan="2" align="center">
                        <h3>Todos os campos são obrigatórios.</h3>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td align="right">
                        <h3>Nome:</h3>
                      </td>
                      <td align="left">
                        <input type="text" name="nome" required maxlength="20" />
                      </td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h3>Sobrenome:</h3>
                      </td>
                      <td align="left">
                        <input
                          type="text"
                          name="sobrenome"
                          required
                          size="30"
                          maxlength="20"
                        />
                      </td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h3>Data de nascimento:</h3>
                      </td>
                      <td align="left">
                        <input type="date" name="datanasc" required />
                      </td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h3>Endereço:</h3>
                      </td>
                      <td align="left">
                        <input
                          type="text"
                          name="endereco"
                          required
                          size="30"
                          maxlength="30"
                        />
                      </td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h3>Bairro:</h3>
                      </td>
                      <td align="left">
                        <input
                          type="text"
                          name="bairro"
                          required
                          size="30"
                          maxlength="30"
                        />
                      </td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h3>Cidade:</h3>
                      </td>
                      <td align="left">
                        <input
                          type="text"
                          name="cidade"
                          required
                          size="30"
                          maxlength="30"
                        />
                      </td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h3>UF:</h3>
                      </td>
                      <td align="left">
                        <select name="uf" required>
                          <option value="Acre">Acre</option>
                          <option value="Alagoas">Alagoas</option>
                          <option value="Amapá">Amapá</option>
                          <option value="Amazonas">Amazonas</option>
                          <option value="Bahia">Bahia</option>
                          <option value="Ceará">Ceará</option>
                          <option value="Distrito Federal">Distrito Federal</option>
                          <option value="Espírito Santo">Espírito Santo</option>
                          <option value="Goiás">Goiás</option>
                          <option value="Maranhão">Maranhão</option>
                          <option value="Mato Grosso">Mato Grosso</option>
                          <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                          <option value="Minas Gerais">Minas Gerais</option>
                          <option value="Pará">Pará</option>
                          <option value="Paraíba">Paraíba</option>
                          <option value="Paraná">Paraná</option>
                          <option value="Pernambuco">Pernambuco</option>
                          <option value="Piauí">Piauí</option>
                          <option value="Rio de Janeiro">Rio de Janeiro</option>
                          <option value="Rio Grande do Sul" selected>
                            Rio Grande do Sul
                          </option>
                          <option value="Rio Grande do Norte">
                            Rio Grande do Norte
                          </option>
                          <option value="Rondônia">Rondônia</option>
                          <option value="Roraima">Roraima</option>
                          <option value="Santa Catarina">Santa Catarina</option>
                          <option value="São Paulo">São Paulo</option>
                          <option value="Sergipe">Sergipe</option>
                          <option value="Tocantins">Tocantins</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h3>Sexo:</h3>
                      </td>
                      <td align="left">
                        <input type="radio" name="sexo" value="M" checked />Masculino
                        <input type="radio" name="sexo" value="F" />Feminino
                      </td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h3>Telefone:</h3>
                      </td>
                      <td align="left">
                        <input type="tel" name="telefone" required />
                      </td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h3>E-mail:</h3>
                      </td>
                      <td align="left">
                        <input
                          type="email"
                          name="email"
                          placeholder="nome@dominio.com"
                          required
                        />
                      </td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h3>Usuário:</h3>
                      </td>
                      <td align="left">
                        <input type="text" name="usuario" required />
                      </td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h3>Senha:</h3>
                      </td>
                      <td align="left">
                        <input type="password" name="senha" required />
                      </td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h3>Observação</h3>
                      </td>
                      <td align="left">
                        <textarea name="obs" rows="6" cols="30" required> </textarea>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td align="center" colspan="2">
                        <input type="submit" name="enviar" value="Enviar" />
                        <input type="reset" name="limpar" value="Limpar" />
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </form>
                -->
    </section>
    <!--fim section meio-->
    <footer>
      <hr id="hr3" />

      <nav id="navInf">
        <h2 id="h2">
          <a href="../index.html">Home</a>|
          <a href="./oprograma.html">O programa</a>|
          <a href="./inscrever.html">Como se inscrever</a>|
          <a href="./consulta.html">Consulta de vagas</a>|
          <a href="./perguntas.html">Perguntas frequentes</a>|
          <a href="./fale_conosco.html">Fale Conosco</a>
        </h2>
      </nav>
      <hr id="hr4" />

      <article id="articleFooter">
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
      </article>
    </footer>
  </main>
</body>

</html>