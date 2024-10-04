<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>cadastrar</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <hr>
    <?php
    if (isset($_COOKIE['login'])) {
        echo 'SEJA BEM VINDO';
    } else {
        echo 'BEM VINDO INTRUSO';    
        echo '<a href="login.php">FACA LOGIN</a>';
    }
    ?>
    <body>
        <form action="recebeCadastro.php" method="post">
            Nome: 
            <input type="text" name="nome"><br>
            login:
            <input type="text" name="login"><br>
            Senha:
            <input type="password" name="senha"><br>
            <input type="submit" name="enviar">
        </form>
        
    </body>
</html>
