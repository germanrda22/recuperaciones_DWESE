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


if(isset($_GET['horario']))
{
    $funcion_variable = "saludo_" . $_GET['horario'];
    echo $funcion_variable();
}else{
    echo "Error";
}