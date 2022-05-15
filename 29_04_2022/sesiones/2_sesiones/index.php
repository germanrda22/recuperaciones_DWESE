<?php
// creamos la sesión
    session_start();
    // si no existe la sesión se crea
    // una variable de sesión con valor 0
    if(!isset($_SESSION['count'])){
        $_SESSION['count'] = 0;
    }
    else // si existe le suma 1
    {
        $_SESSION['count']++;
    }
    echo "hola" .$_SESSION['count']."veces";
    // Vinculo a otra página
    echo "<br><a href='sesiones_uso_basico.php'>Siguente</a>";