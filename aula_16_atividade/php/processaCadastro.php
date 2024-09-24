<?php

/*
  A função require() do PHP tem a mesma funcionalidade da
  função include(), citada acima, com a diferença que se
  caso o arquivo que você está incluindo não exista
  (ou não seja encontrado), será gerado um Fatal Error
  (erro fatal), paralizando a execução de qualquer script
  que venha após a linha do require(); outra divergência
  é o fato desta função não aceitar parâmetros via GET
  para o arquivo chamado. Caso você utilize este parâmetro,
  ele será ignorado.
 */
require('conexao.php'); //chamar o arquivo
include './cadastrar.php';
$nome = $_POST['nome'];
$snome = $_POST['sNome'];
$dataNasc = $_POST['dataNasc'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['uf'];
$sexo = $_POST['sexo'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$obs = $_POST['obs'];

//inserir os dados do formulário na tabela contato do banco agenda

$a = new cadastrar();

$a->setNome($nome);
$a->setSobrenome($snome);
$a->setDatanasc($dataNasc);
$a->setEndereco($endereco);
$a->setBairro($bairro);
$a->setCidade($cidade);
$a->setEstado($estado);
$a->setSexo($sexo);
$a->setFone($fone);
$a->setEmail($email);
$a->setSenha($senha);
$a->setObservacao($obs);



$sql = "INSERT INTO contato values(null, '".$a->getNome()."','".$a->getNome()."','".$a->getNome()."','".$a->getNome()."','".$a->getNome()."','".$a->getNome()."','".$a->getNome()."','".$a->getNome()."','".$a->getNome()."','".$a->getNome()."','".$a->getNome()."',)";
//query($sql) - realiza uma consulta simples no banco


if ($conn->query($sql) === TRUE) {
    echo "<script language='javascript' type='text/javascript'>
			alert('Cadastro realizado com sucesso!');
			window.location.href='../pages/fale_conosco.html';</script>";
    die();
    //die — Equivalente a exit()
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
    echo "<br />";
    echo "Não foi possível realizar o cadastro";
}
//finaliza a conexão com o banco
$conn->close();

