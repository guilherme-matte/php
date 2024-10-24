<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<title>Programa Senac Gratuidade</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, 
		initial-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="./css/reset.css" />
	<link rel="stylesheet" type="text/css" href="./css/estilo.css" />
	<link rel="stylesheet" type="text/css" href="./css/layout.css" />
</head>

<body>
	<div id="corpo">
		<!--Inicio da div corpo -->
		<div id="cabecalho">
			<!--Inicio da div cabecalho -->
			<div id="cabecalhoEsq">
				<!--Inicio da div cabecalhoEsq -->
				<p class="p1">
					<a href="./index.php">
						<img src="./img/senac_logo_new.png" alt="Logotipo SenacRS" title="Logotipo SenacRS" />
					</a>
				</p>
			</div>
			<!--Fim da div cabecalhoEsq -->
			<div id="cabecalhoMeio">
				<!--Inicio da div cabecalhoMeio -->
				<p id="pCabecalhoMeio">
					Rio Grande do Sul
				</p>
			</div>
			<!--Fim da div cabecalhoMeio -->
			<div id="cabecalhoDir">
				<!--Inicio da div cabecalhoDir -->
				<p class="p1">
					<a class="linkRedes" href="https://www.facebook.com/senacrsoficial" target="blank">
						<img class="imgRedes" src="./img/icon_facebook.png" alt="Rede social Facebook"
							title="Rede social Facebook" />
					</a>
					<a class="linkRedes" href="https://www.instagram.com/senacrs/" target="blank">
						<img class="imgRedes" src="./img/icon_instagram.png" alt="Rede social Instagram"
							title="Rede social Instagram" />
					</a>
					<a class="linkRedes" href="https://x.com/senacrs" target="blank">
						<img class="imgRedes" src="./img/icon_twitter.png" alt="Rede social X-Twitter"
							title="Rede social X-Twitter" />
					</a>
					<a class="linkRedes"
						href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGjNOZytbRLdwAAAZCDGdKQorc6a1HY6F3qjme8z6BVRLg3Kf_kVJ6e2WdIWIQaf8cRxOiTYKMz4bfZdnAKle3AQRelQP4NsP7sHBP37X7E5DOoOr4lQF2mPZUvO0avML2F1HE=&original_referer=https://www.senacrs.com.br/&sessionRedirect=https%3A%2F%2Fbr.linkedin.com%2Fschool%2Fsenac-rs%2F"
						target="blank">
						<img class="imgRedes" src="./img/icon_linkedin.png" alt="Rede social Linkedin"
							title="Rede social Linkedin" />
					</a>
					<a class="linkRedes" href="https://www.youtube.com/senacrsoficial" target="blank">
						<img class="imgRedes" src="./img/icon_youtube.png" alt="Canal Youtube" title="Canal Youtube" />
					</a>
					<a class="linkRedes" href="https://open.spotify.com/user/oe434380olmwip17xaxyjb0bc" target="blank">
						<img class="imgRedes" src="./img/icon_spotify.png" alt="Canal Spotify" title="Canal Spotify" />
					</a>
				</p>
			</div>
			<!--Fim da div cabecalhoDir -->

		</div>
		<?php
		if (isset($_SESSION['nome_usu_sessao'])) {
			echo 'Olá ' . $_SESSION['nome_usu_sessao'] . ", seja bem-vindo!";
			echo "<a href'./index.php?sair'>SAIR</a>";
		} else {
			echo "<a href='./pages/login.php'>ACESSAR SISTEMA</a>";

		}
		if ($_GET['sair']) {
			session_destroy();
			header("location:./index.php");
		}
		?>
		<!--Fim da div cabecalho -->
		<hr class="hr1" />
		<div id="divMenu">
			<!--Inicio da divMenu -->
			<!--Menu do sistema -->
			<h1 id="h1">
				<a href="./index.php">Home</a>|
				<a href="./pages/oprograma.php">O programa</a>|
				<a href="./pages/inscrever.php">Como se inscrever</a>|
				<a href="./pages/consulta.php">Consulta de vagas</a>|
				<a href="./pages/perguntas.php">Perguntas frequentes</a>|
				<a href="./pages/fale_conosco.php">Fale Conosco</a>|
				<a href="./pages/cadastro.php">Cadastrar</a>|
				<a href="./pages/acessarSistema.php">Acessar</a>

			</h1>
		</div>
		<!--Fim da divMenu -->
		<hr class="hr2" />
		<div id="divMeio">
			<!--Inicio da divMeio -->
			<div id="divMeioSuperior">
				<!--Inicio da divMeioSuperior -->
				<img id="imgBanner" src="./img/banner_programa.jpg" alt="Banner Programa"
					title="Banner programa Senac gratuidade" />
			</div>
			<!--Fim da divMeioSuperior -->
			<div id="divMeioCentro">
				<!--Inicio da divMeioCentro -->
				<h1 class="h2">O programa Senac Gratuidade</h1>
				<p class="pText">
					O que é o PSG.
					<!--Tag strong coloca texto em destaque -->
					<br />
					<!--Tag em coloca texto em itálico -->
					Firmado em 22 de julho de 2008 entre o Ministério da Educação, o Ministério do Trabalho, o
					Ministério da Fazenda, a Confederação Nacional do Comércio de Bens, Serviços e Turismo - CNC e o
					Senac, e ratificado pelo Decreto nº 6.633, de 5 de novembro de 2008 , o Programa Senac de Gratuidade
					– PSG tem por objetivo garantir o acesso à educação profissional de qualidade para pessoas cuja
					renda familiar mensal per capita não ultrapasse dois salários mínimos.
					<br />
					Pelo acordo celebrado, o Senac investe, desde 2014, 66,67% de sua Receita Líquida de Contribuição
					nesse importante programa de educação inclusiva.
				</p>
				<p class="p1">
					<img id="imgBannerPsg" src="./img/card_cursos.jpg" alt="Banner cursos gratuitos"
						title="Banner sobre os cursos gratuitos" />
				</p>
				<h2 id="h3">
					Confira o vídeo da campanha
					<br />
					"Tá de graça tá no Senac"
				</h2>
				<p class="p1">
					<iframe id="iframeYoutube" src="https://www.youtube.com/embed/8G7WRCJ8VVM?si=elJatw36tYsK2fEf"
						title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</p>

				<h1 class="h2">Veja se você pode se inscrever no PSG.</h1>
				<p class="pText">
					O Programa Senac de Gratuidade foi pensado como um instrumento de inclusão produtiva para
					brasileiros oriundos de família de baixa renda.
				</p>
				<p class="pJustify">
					A renda familiar mensal per capita é calculada somando-se a renda bruta dos componentes do grupo
					familiar e dividindo-se pelo número de pessoas que formam esse grupo familiar.
				</p>
				<p class="pJustify">
					Se o resultado for até 2 salários mínimos federais, o candidato poderá concorrer a uma vaga no PSG.
				</p>
				<p class="pJustify">
					Grupo familiar – corresponde ao próprio candidato e as pessoas que moram com ele, que usufruam da
					renda bruta familiar e tenham com o candidato algum grau de parentesco: pai, padrastro, mãe,
					madrastra, cônjuge, companheiro(a), filho(a), enteado(a), irmão(ã), ou avô(ó).
				</p>
			</div>
			<!--Fim divMeioCentro -->
		</div>
		<!--Fim divMeio -->
		<div id="divMenuRodape">
			<!--Inicio divMenuRodape -->
			<hr class="hr1" />
			<h2 id="h2">
				<a href="./index.html">Home</a>|
				<a href="./pages/oprograma.html">O programa</a>|
				<a href="./pages/inscrever.html">Como se inscrever</a>|
				<a href="./pages/consulta.html">Consulta de vagas</a>|
				<a href="./pages/perguntas.html">Perguntas frequentes</a>|
				<a href="./pages/fale_conosco.html">Fale Conosco</a>
			</h2>
		</div>
		<!--Fim divMenuRodape -->
		<hr class="hr2" />
		<div id="divRodape">
			<!--Inicio divRodape -->
			<p class="p1">
				<img src="./img/logo_footer_mobile.png" alt="Logotipo Senac" title="logotipo Senac">
			</p>
			<p class="p1">
				<a class="linkRedes" href="https://www.facebook.com/senacrsoficial" target="blank">
					<img class="imgRedes" src="./img/icon_facebook.png" alt="Rede social Facebook"
						title="Rede social Facebook" />
				</a>
				<a class="linkRedes" href="https://www.instagram.com/senacrs/" target="blank">
					<img class="imgRedes" src="./img/icon_instagram.png" alt="Rede social Instagram"
						title="Rede social Instagram" />
				</a>
				<a class="linkRedes" href="https://x.com/senacrs" target="blank">
					<img class="imgRedes" src="./img/icon_twitter.png" alt="Rede social X-Twitter"
						title="Rede social X-Twitter" />
				</a>
				<a class="linkRedes"
					href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGjNOZytbRLdwAAAZCDGdKQorc6a1HY6F3qjme8z6BVRLg3Kf_kVJ6e2WdIWIQaf8cRxOiTYKMz4bfZdnAKle3AQRelQP4NsP7sHBP37X7E5DOoOr4lQF2mPZUvO0avML2F1HE=&original_referer=https://www.senacrs.com.br/&sessionRedirect=https%3A%2F%2Fbr.linkedin.com%2Fschool%2Fsenac-rs%2F"
					target="blank">
					<img class="imgRedes" src="./img/icon_linkedin.png" alt="Rede social Linkedin"
						title="Rede social Linkedin" />
				</a>
				<a class="linkRedes" href="https://www.youtube.com/senacrsoficial" target="blank">
					<img class="imgRedes" src="./img/icon_youtube.png" alt="Canal Youtube" title="Canal Youtube" />
				</a>
				<a class="linkRedes" href="https://open.spotify.com/user/oe434380olmwip17xaxyjb0bc" target="blank">
					<img class="imgRedes" src="./img/icon_spotify.png" alt="Canal Spotify" title="Canal Spotify" />
				</a>
			</p>
			<p id="pDireitos">
				© Todos os Direitos Reservados - 2024.
			</p>
		</div>
		<!--Fim da divRodape -->
	</div>
	<!--Fim da div corpo -->
</body>

</html>