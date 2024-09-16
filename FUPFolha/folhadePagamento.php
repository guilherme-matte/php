<?php

include './folha.php';
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$horasTrabalhadas = $_POST['horasTrabalhadas'];
$valorHoraTrabalhada = $_POST['valorHoraTrabalhada'];
$valorVR = $_POST['valorValeRefeicao'];
$valorVT = $_POST['valorValeTransporte'];

$folha = new Folha;

$folha->setNome($nome);
$folha->setCargo($cargo);

$folha->setHorasTrabalhadas($horasTrabalhadas);
$folha->setValorHoras($valorHoraTrabalhada);

$folha->setValorVT($valorVT);
$folha->setValorVR($valorVR);
echo 'Calculo de Folha de pagamento <br/>';
echo 'Nome do colaborador: ' . $folha->getNome() . '<br/>';
echo 'Cargo: ' . $folha->getCargo() . '<br/>';
echo 'Valor do Salario Bruto: ' . $folha->getValorHoras() * $folha->getHorasTrabalhadas() . '<br/>';
echo '<hr/>';

$folha->calcularFolha();

