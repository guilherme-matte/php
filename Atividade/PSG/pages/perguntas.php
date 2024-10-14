<!DOCTYPE HTML>
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
        <a href="./fale_conosco.php">Fale Conosco</a>

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
            header("location: perguntas.php");
          }
          if (isset($_SESSION["nome_usu_sessao"]) && ($_SESSION['cargo_usu_sessao']) === 'ADM') {
            echo "<a href='./pages/ADM.php'> Administração | </a>  ";
          }
          echo "<a href='perguntas.php?logout'>Logout</a> ";

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
  

<h1 class="h2">
Perguntas frequentes
</h1>
<p class="p1">
<img id="imgBannerPerguntas"
 src="../img/faq.png" 
 alt="Dúvidas" 
 title="Dúvidas" />
</p>
<h2 class="hLeft">
O que é o PSG?
</h2>
<p class="pJustify">
É sigla do Programa Senac de Gratuidade, uma ação da instituição para promover a inclusão social. O PSG foi operacionalizado, a partir de 2009, a partir de Acordo com o Governo Federal, para garantir a oferta de vagas gratuitas em cursos de educação profissional, da Formação Inicial ao Nível Técnico, com custo zero à população brasileira de baixa renda.
</p>
<h2 class="hLeft">
Como funciona o Programa?
</h2>
<p class="pJustify">
Presente com ações em todo o Brasil, o Senac de cada estado divulga as vagas gratuitas para cursos presenciais e a distância. Os interessados fazem suas inscrições e são selecionados segundo a ordem cronológica de suas inscrições. O candidato selecionado apresenta a documentação pertinente durante o processo de matrícula, quando também é informado sobre o período de início das aulas. Aí é só começar a estudar e se preparar para uma carreira.
</p>
<h2 class="hLeft">
Quem pode participar do Programa?
</h2>
<p class="pJustify">
O PSG foi criado para atender à população de baixa renda, isto é, pessoas com renda familiar mensal por pessoa inferior a dois salários mínimos (salário mínimo federal). Os candidatos a essas vagas devem ser alunos que estejam cursando, ou já tenham concluído, a educação básica e trabalhadores empregados ou desempregados. É importante dizer que os que atenderem as duas condições - aluno e trabalhador - terão prioridade. Essas condições são válidas para os cursos de formação inicial e continuada e para os cursos técnicos. Já a oferta de aprendizagem profissional comercial possui condições específicas determinadas pela Lei da Aprendizagem (Lei 10.097/2000).
</p>
<h2 class="hLeft">
Como eu calculo a minha renda familiar per capita?
</h2>
<p class="pJustify">
Primeiramente, é preciso calcular a renda bruta de todos os membros de sua família. Por exemplo, somando todos os salários e dividindo esse total por todos os componentes que dividem a mesma moradia. Se a média for até dois salários mínimos federais, você poderá concorrer a uma vaga no PSG. Lembrando que entende-se por grupo familiar, além do próprio candidato, o conjunto de pessoas que residam na mesma moradia que o candidato que, cumulativamente, usufruam da renda bruta mensal familiar e tenham com o candidato algum dos seguintes graus de parentesco: pai, padrasto, mãe, madrasta, cônjuge, companheiro(a), filho(a), enteado(a), irmão(ã) ou avô(ó). Qualquer dúvida, acesse a calculadora de renda per capita na página principal deste site.
</p>
<h2 class="hLeft">
Como me inscrevo no Programa?
</h2>
<p class="pJustify">
Entre em contato com o Senac da sua região, verifique a programação em oferta, escolha o curso, o turno e o endereço mais convenientes para você.
</p>
<h2 class="hLeft">
Existe algum tipo de seleção?
</h2>
<p class="pJustify">
Sim. O candidato deve apresentar toda a documentão exigida para a sua matrícula. A ausência de qualquer dos documentos será impeditivo para sua participação. Os requisitos básicos para cadastramento são:
<ul class="ulPerguntas">
<li class="liPerguntas">
Possuir renda familiar per capita de até 2 salários mínimos federais
</li>
<li class="liPerguntas">
Possuir CPF
</li>
<li class="liPerguntas">
Possuir documentos que comprovem o atendimento aos requisitos de acesso estabelecidos para os cursos e as informações prestadas no ato do cadastramento
</li>
<li class="liPerguntas">
Ser aluno, que esteja cursando ou já tenha concluído a educação básica e trabalhador (empregado ou desempregado), priorizando-se aqueles que satisfizerem as duas condições: aluno e trabalhador.
</li>
</ul>
</p>
<h2 class="hLeft">
O que preciso para efetivar a minha matrícula?
</h2>
<p class="pJustify">
Para efetivar a Matrícula, o candidato terá de atender aos requisitos do PSG e do curso escolhido.
<ol class="olPerguntas">
<li class="liPerguntas">
No ato da matrícula, o Departamento Regional deverá conferir e recolher a documentação necessária informada no processo de inscrição, sendo indispensável a apresentação do Cadastro de Pessoa Física (CPF) e respectivo número, e demais documentos de acordo com pré-requisitos do curso.
</li>
<li class="liPerguntas">
Para os cursos do tipo Aperfeiçoamento, será necessário que o candidato apresente:
</li>
	<ol class="olPerguntasSub">
	<li class="liPerguntas">
	Certificado de curso de Qualificação Profissional, ou
Registro de ocupação em Carteira de Trabalho Profissional, ou
Declaração da empresa empregadora, ou
Autodeclaração de trabalho/experiência profissional.
	</li>
	</ol>
<li class="liPerguntas">
Na efetivação da matrícula, além de apresentar documentos e atender aos requisitos do curso, o aluno – ou o seu responsável legal – assinará a “Autodeclaração de renda” e o “Termo de Compromisso” com a definição das regras a serem cumpridas. Na oferta dos cursos de Formação Inicial e Continuada pela Rede EAD, o candidato deverá preencher os formulários com as informações dos documentos solicitados e dar “aceite” durante a inscrição, o que implicará em responsabilidade direta sobre as informações preenchidas nos documentos. Quando o candidato preencher e der o “aceite”, comprovando o atendimento a todos os documentos exigidos, a matrícula será processada e o candidato avisado da sua efetivação por meio do e-mail informado.
</li>	
</ol>
</p>
<h2 class="hLeft">
Os documentos apresentados serão devolvidos pelo Senac?
</h2>
<p class="pJustify">
Após análise da documentação (etapa de triagem e matrícula), os originais, exceto da documentação comprobatória de escolaridade, serão devolvidos aos candidatos.
</p>
<h2 class="hLeft">
O que acontece se o candidato se matricular e não frequentar o curso para o qual foi classificado?
</h2>
<p class="pJustify">
No ato da matrícula, o candidato - ou o seu responsável legal - assinará um termo de compromisso, no qual estão definidas as regras a serem cumpridas, bem como as consequências previstas para os casos de desistência sem justificativa. O aluno que abandonar o curso, por exemplo, poderá ter a matrícula cancelada e poderá ser impedido de fazer nova solicitação de vaga no PSG no mesmo exercício.
</p>
<h2 class="hLeft">
Existe diferença entre os cursos gratuitos do PSG e os cursos pagos?
</h2>
<p class="pJustify">
A qualidade sempre está presente nos programas educacionais do Senac, seja em cursos pagos ou nos gratuitos. Será o mesmo conteúdo, a mesma carga horária e o mesmo material didático.
</p>
<h2 class="hLeft">
Posso fazer mais de um curso pelo PSG?
</h2>
<p class="pJustify">
Certamente. No Senac o aluno pode ir cada vez mais longe em sua carreira, planejando hoje o que deseja trilhar na sua profissão. Além disso, no mesmo período é possível participar de um segundo curso desde que em turnos diferentes.
</p>

<hr class="hr1" />
<h2 class="p1">
<a href="../index.html">Home</a>|
<a href="./oprograma.html">O programa</a>|
<a href="./inscrever.html">Como se inscrever</a>|
<a href="./consulta.html">Consulta de vagas</a>|
<a href="./perguntas.html">Perguntas frequentes</a>|
<a href="./fale_conosco.html">Fale Conosco</a>
</h2>
<hr id="hr2" />
<p class="p1">
<img src="../img/senac_logo_new.png" 
alt="Logotipo Senac" title="logotipo Senac">
</p>
<p class="p1">
<a class="linkRedes"
 href="https://www.facebook.com/senacrsoficial"
  target="blank">
<img class="imgRedes"
src="../img/icon_facebook.png" 
alt="Rede social Facebook" 
title="Rede social Facebook"  />
</a>
<a class="linkRedes"
 href="https://www.instagram.com/senacrs/"
  target="blank">
<img  class="imgRedes"
src="../img/icon_instagram.png" 
alt="Rede social Instagram" 
title="Rede social Instagram"  />
</a>
<a class="linkRedes"
 href="https://x.com/senacrs" 
 target="blank">
<img  class="imgRedes"
src="../img/icon_twitter.png" 
alt="Rede social X-Twitter" 
title="Rede social X-Twitter"  />
</a>
<a class="linkRedes" 
href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGjNOZytbRLdwAAAZCDGdKQorc6a1HY6F3qjme8z6BVRLg3Kf_kVJ6e2WdIWIQaf8cRxOiTYKMz4bfZdnAKle3AQRelQP4NsP7sHBP37X7E5DOoOr4lQF2mPZUvO0avML2F1HE=&original_referer=https://www.senacrs.com.br/&sessionRedirect=https%3A%2F%2Fbr.linkedin.com%2Fschool%2Fsenac-rs%2F" target="blank">
<img  class="imgRedes"
src="../img/icon_linkedin.png" 
alt="Rede social Linkedin" 
title="Rede social Linkedin"  />
</a>
<a class="linkRedes" 
href="https://www.youtube.com/senacrsoficial" 
target="blank">
<img class="imgRedes" 
src="../img/icon_youtube.png" 
alt="Canal Youtube" 
title="Canal Youtube"  />
</a>
<a class="linkRedes" 
href="https://open.spotify.com/user/oe434380olmwip17xaxyjb0bc" 
target="blank">
<img class="imgRedes" 
src="../img/icon_spotify.png" 
alt="Canal Spotify" 
title="Canal Spotify"  />
</a>
</p>
<p align="center">
© Todos os Direitos Reservados - 2024.
</p>
</body>	
</html>