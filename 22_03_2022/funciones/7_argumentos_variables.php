<?php
/* function concatena($titulo, ...$palabras)
{
    $resultado = $titulo."\n"; //\n para salto de línea
    foreach($palabras as $palabra)
    {
        $resultado .= $palabra. " ";
    }
    return $resultado;
}

echo concatena("Módulos 2º DAW: ", "DWESE", "DWECL", "Empresas", "HLC");
echo concatena("Asignaturas 1º ESO; ", "Lengua", "Maemáticas"); */

function suma(...$numeros)
{
    $resultado = 0;
    foreach($numeros as $numero)
    {
        $resultado += $numero;
    }
    return $resultado;
}

echo suma(1, 2, 3);