<?php

//criar a conexão com o banco de dados
$host = 'localhost';//nome do servidor
$user = 'root';//nome do usuário
$senha = '';//senha do banco
$banco = 'senac_rs';//nome do banco

//Armazenar os dados do banco em uma variável
//Criar conexão
/*As funções do MySQLi permitem acessar servidores 
de banco de dados MySQL.
As funções do MySQLi permitem acessar servidores 
de banco de dados MySQL( MySQL Improved-melhorada).
*/

$conn = new mysqli($host, $user, $senha, $banco);
//Verifique a conexão
//die — Equivalente a exit()
//connect_error - Retorne a descrição do erro 
//do último erro de conexão, se houver
if ($conn->connect_error){
	die("Falha na conexão: " . $conn->connect_error);	
}
?>