<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Escola</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="post">
            Digite o primeiro nota:
            <input type="text" required name="n1"><br/>
            Digite o segunda nota:
            <input type="text" required name="n2"><br/>
            Digite o terceira nota:          
            <input type="text" required name="n3"><br/>
            Digite a quarta nota: 
            <input type="text" required name="n4"><br/>
            Digite a quinta nota: 
            <input type="text" required name="n5"><br/>
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <hr>
        <?php
        if (isset($_POST['enviar'])) {

            $nomes[0] = $_POST['n1'];
            $nomes[1] = $_POST['n2'];
            $nomes[2] = $_POST['n3'];
            $nomes[3] = $_POST['n4'];
            $nomes[4] = $_POST['n5'];
            $soma = 0;
            for ($i = 0; $i < 5; $i++) {
                $soma += $nomes[$i];
                echo 'O valor da ' . ($i + 1) . ' nota é: ' . $nomes[$i] . '<br>';
            }
            $media = $soma / count($nomes);
            
            echo 'A media e: ' . $media;
        }
        ?>
    </body>
</html>
