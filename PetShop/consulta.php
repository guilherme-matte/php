<?php

include './conexao.class.php';
echo '<a href="formulario.html"> Cadastro </a> - <a href="consulta.php"> Consulta </a> <br/> <hr/>';

$conexao = new conexao();
$consulta = $conexao->consulta();

while ($linha = $consulta->fetch_assoc()) {
    $nome = $linha['nome'];
    $raca = $linha['raca'];
    $idade = $linha['idade'];
    $dono = $linha['dono'];
    $cpf = $linha['cpf'];
}