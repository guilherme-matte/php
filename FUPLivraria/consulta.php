<?php

include './conexao.class.php';

echo '<a href="consulta.php">
            Consultar
        </a>
        <br/>
        <a href="formulario.html">
            Cadastrar
        </a>
        <hr>';
echo '<h1>Consulta de livros</h1>';

$conexao = new Conexao();
$consulta = $conexao->consulta();

while ($linha = $consulta->fetch_assoc()) {
    $idLivro = $linha['id'];
    $titulo = $linha['titulo'];
    $edicao = $linha['edicao'];
    $tema = $linha['tema'];
    $numPaginas = $linha['numPaginas'];
    $anoPublicacao = $linha['anoPublicacao'];

    echo "<h3>"
    . "Identificacao: $idLivro - "
    . "Titulo: $titulo - "
    . "Edicao: $edicao - "
    . "Tema: $tema - "
    . "Numero de paginas: $numPaginas - "
    . "Ano de Publicacao: $anoPublicacao"
    . "</h3>"
    . "<br><hr>";
}