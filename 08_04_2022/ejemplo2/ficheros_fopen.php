<?php
    $fich = fopen("fichero_ejemplo.txt", "r");
    if($fich == false)
    {
        echo "No se encuentra fichero_ejemplo.txt<br/>";
    }else{
        echo "fichero_ejemplo.txt se abrió con éxito<br/>";
    }
    $fich = fopen("fichero_inexistente.txt", "r");
    if($fich == false)
    {
        echo "No se encuentra fichero_inexistente.txt<br/>";
    }else{
        echo "fichero_inexistente.txt se abrió con éxito<br/>";
    }