<?php
function tirada()
{
    return rand(1, 6);
}

function ganador(int $tirada1, int $tirada2)
{
    if($tirada1 > $tirada2){
        echo "<h1>Gana el jugador uno $tirada1 a $tirada2</h1>";
    }elseif($tirada1 < $tirada2){
        echo "<h1>Gana el jugador dos $tirada2 a $tirada1</h1>";
    }else{
        echo "<h1>Empate a $tirada1</h1>";
    }
}

$tirada1 = tirada();
$tirada2 = tirada();

ganador($tirada1, $tirada2);