<?php

/*
 * Para ver las cookies necesitamos usar la variable superglobal $_COOKIE,
 * que es un array asociativo
 */
if(isset($_COOKIE['micookie']))
{
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo "No existe la cookie";
}

if(isset($_COOKIE['unyear']))
{
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}else{
    echo "No existe la cookie";
}
?>

<a href="borrar_cookie.php">Borrar cookie</a>