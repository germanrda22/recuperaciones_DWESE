<?php
function factorial(int $num)
{
    $fact = 1;
    while($num >= 1){
        $fact *= $num;
        $num --;
    }
    return $fact;
}


function factorial2(int $numero)
{
    $resultado = 1;
    for($x = $numero; $x > 0; $x--){
        $resultado = $resultado * $x;
    }
    return $resultado;
}
echo factorial(6);