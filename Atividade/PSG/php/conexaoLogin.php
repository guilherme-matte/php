<?php
	$host = 'localhost';
	$user = 'root';
	$senha = '';
	$banco = 'senac_login';
	
	$conn = new mysqli($host,$user,$senha,$banco);
	if($conn->connect_error){
		die("Falha na conexão: "
		.$conn->connect_error);
	}
?>