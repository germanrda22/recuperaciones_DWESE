<?php

function verdadero(int $res)
{
    if($res == 1){
        return "true";
    }else{
        return "false";
    }
}

$cadena = "Esta cadena tiene muchas letras";

echo "La cadena empieza por 'Esta' : ". verdadero(str_starts_with($cadena, 'Esta'))."<br/>";
echo "La cadena empieza por 'Aquella' : ". verdadero(str_starts_with($cadena, 'Aquella'))."<br/>";
echo "La cadena termina por 'letras' : ". verdadero(str_ends_with($cadena, 'letras'))."<br/>";
echo "La cadena termina por 'vocales' : ". verdadero(str_ends_with($cadena, 'vocales'))."<br/>";