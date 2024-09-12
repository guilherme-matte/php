<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="array2.php" method="post">
            Digite o primeiro nome:
            <input type="text" required name="n1"><br/>
            Digite o segundo nome:
            <input type="text" required name="n2"><br/>
            Digite o terceiro nome:          
            <input type="text" required name="n3"><br/>
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <hr>
        <?php
        if (isset($_POST['enviar'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];

            $nomes = array();
            $nomes[0] = $n1;
            $nomes[1] = $n2;
            $nomes[2] = $n3;

            foreach ($nomes as $nomes2) {
                echo 'O nome que escreveu e: ' . $nomes2 . '<br>';
            }
        }
        ?>
    </body>
</html>
