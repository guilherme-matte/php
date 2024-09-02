<?php

$anime = array(1 => "Dragon Ball", 2 => "Cavaleiros dos Zodiaco", 3 => "Sailor Moon");
for ($i = 1; $i < (count($anime) + 1); $i++) {
    echo $anime[$i], '<br/>';

    //var_dump($anime);
}
echo '<hr/>';
$filmes = array("Carros", "Monstros SA", "Tor Story", 7 => "Vida de Inseto");
$filmes[] = "Mulan";
echo '<li>', $filmes[0], ' </li>';
echo '<li>', $filmes[1], ' </li>';
echo '<li>', $filmes[2], ' </li>';
echo '<li>', $filmes[7], ' </li>';
echo '<li>', $filmes[8], ' </li>';
echo '<hr/>';

foreach ($filmes as $desenhos) {
    echo '<li>', $desenhos, ' </li>';
};
echo '<hr/>';
