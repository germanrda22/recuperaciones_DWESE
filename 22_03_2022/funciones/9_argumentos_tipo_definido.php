<?php
declare(strict_types=1);
function sumaNumeros(int|float $sumando1, int|float $sumando2) :int|float
{
    return $sumando1 + $sumando2;
}

echo "La suma de los enteros 3 y 4 es igual a: ". sumaNumeros(3, 4). "<br/>";
echo "La suma de los flotantes 3.5 y 4.6 es igual a: ". sumaNumeros(3.5, 4.6). "<br/>";