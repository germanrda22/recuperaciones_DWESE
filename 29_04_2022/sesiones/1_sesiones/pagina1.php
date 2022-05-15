<?php
// Si quiero usar las sesiones tengo que iniciarlas en cada archivo
session_start();
echo $variable_normal . '<br>'; // La variable local no se podrá imprimir porque no es de este fichero

/*
 * Sin embargo si que muestra el contenido de mi sesion durante toda la navegacion
 * Si a continuacion cierro el navegador 
 */

 echo $_SESSION['variable_persistente'] . '<br>';