<?php
class Solution
{

    /**
     * 
     * 
     */
    function numWaterBottles($garrafas, $trocas)
    {
        $garrafasTrocadas = 0;
        if ($garrafas / $trocas < 1) {
            return 10;
        } else {

            while ($garrafas - $trocas < $trocas) {
                $garrafasTrocadas += 1;
                echo $garrafas - ($trocas * $garrafasTrocadas);
                return $garrafasTrocadas;
            }
        }
    }
}
$solution = new Solution();
$garrafas = 7;
$trocas = 2;
echo "número total de trocas de garrafa: " . $solution->numWaterBottles($garrafas, $trocas);
