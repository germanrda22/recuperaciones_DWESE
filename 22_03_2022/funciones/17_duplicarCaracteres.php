<?php
function duplicaCaracteres($texto)
{
    $cadena_auxiliar = "";
    for($i = 0; $i < mb_strlen($texto); $i++)
    {
        $cadena_auxiliar = $cadena_auxiliar . $texto[$i] . $texto[$i];
    }
    return $cadena_auxiliar;
}


$cadena = "Hola que tal";
echo duplicaCaracteres($cadena);