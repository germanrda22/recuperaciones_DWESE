<?php
declare(strict_types=1);
function sumaNumeros(int $sumando1, int $sumando2) :int|float
{
    return $sumando1 + $sumando2;
}

echo "La suma de los enteros 3 y 4 es igual a: ". sumaNumeros(3, 4). "<br/>";