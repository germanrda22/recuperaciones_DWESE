<?php
/*
 * usaremos una cookie para almacenar el número de veces que un usuario ha
 * visitado la página. Si la cookie no existe se creará
 */ 
if(!isset($_COOKIE['visitas'])) // si no existe
{
    setcookie('visitas', '1', time()+ 3600*24);
    echo "Bienvenido por primera vez";
}else{
    $visitas = (int) $_COOKIE['visitas']; // como el valor es una cadena hay que transformarlo
    $visitas ++;
    setcookie('visitas', $visitas, time() + 3600 * 24);
    echo "Bienvenido por $visitas vez";
}