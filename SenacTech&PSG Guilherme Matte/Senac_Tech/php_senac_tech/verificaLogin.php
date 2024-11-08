<?php

include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conexao = new conexao();
    $result = $conexao->logar($_POST['email']);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($_POST['senha'], $row['senha'])) {
            session_start();
            $nomeFormatado = explode(" ", $row['nomeCompleto']);

if(count($nomeFormatado) > 1) {
            $_SESSION['nome_usu_sessao'] = $nomeFormatado[0] . " " . $nomeFormatado[count($nomeFormatado) - 1];
           
}else{
            $_SESSION['nome_usu_sessao'] = $nomeFormatado[0];

}
$_SESSION['cargo_usu_sessao'] = $row['cargo'];
header("location: ../index.php");
exit();
        } else {
            echo "<script language='javascript' type='text/javascript'>
			 	alert('Não foi possível realizar o login! Senha incorreta!');
			 	window.location.href='../pages/login.php';
			 	</script>";
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>
		 		alert('Não foi possível realizar o login! Usuário ou senha incorreta!');
		 		window.location.href='../pages/login.php';
		 		</script>";
    }
}