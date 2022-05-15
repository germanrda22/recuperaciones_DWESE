<?php
function saludo_manana()
{
    return "Buenos días";
}

function saludo_tarde()
{
    return "Buenas tardes";
}

function saludo_noche()
{
    return "Buenas noches";
}

$horario = "tarde";
$funcion_variable = "saludo_".$horario;
echo $funcion_variable();

echo "<br><br>";

$horario = "manana";
$funcion_variable = "saludo_".$horario;
echo $funcion_variable();