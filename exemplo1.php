<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Meu primeiro programa php</title>
</head>

<body>

    <h1>Olá Mundo no HTML!</h1>
    <?php

    echo "<h1>Olá Mundo no PHP!</h1>";
    echo "<hr/>";
    echo "versão do PHP " . phpversion();
    echo "<hr/>";
    //comentario
    
    /*
    comentario de multiplas linhas
    
    variaveis no php:
    - começar com letra minuscula,
    - pode ter número,
    - não pode espaço em branco, caracteres especiais e acentuação
    - não pode usar palavras reservadas do sistema. Ex: "echo"
    - pode usar o " _ " para nome composto
    */
    $a = "olá mundo na variavel em php!";
    $b = "informação da segunda variavel";
    echo $a;
    echo "<br/>";
    echo $b;
    echo "<br/>";
    echo "<p> $a </p>";
    echo "<br/>";
    echo "<p> $b </p>";
    echo "valor da variavel \$a: $a ";
    echo "<br/>";
    echo "valor da variavel \$b: $b ";
    ?>
</body>

</html>