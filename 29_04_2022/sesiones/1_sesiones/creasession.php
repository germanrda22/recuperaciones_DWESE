<?php
    /*
    * Una sesion almacena y permite datos del usuario mientras que navega
    * en un sitio web hasta que cierra sesion o cierra el navegador
    * Los datos de la sesion estarán en servidor web y por ello son más seguras
    * que si estuvieramos en el cliente
    */
    // Iniciar sesión
    session_start();
    // Ejemplo de variable local que solo será visible en este archivo
    $variable_normal = 'Hola <br>';
    // Crear una variable de sesión
    // Se podrá usar en cualquier página de mi dominio
    $_SESSION['variable_persistente'] = 'Soy una sesión activa'; // Esta variable se puede utilizar en cualquier página del dominio actual

    echo $variable_normal."<br>";
    echo $_SESSION['variable_persistente']."<br>";

?>