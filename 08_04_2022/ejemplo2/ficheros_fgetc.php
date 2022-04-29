<?php
    $fich = fopen("fichero_ejemplo.txt", "r");
    if($fich === false)
    {
        echo "No se encuentra el fichero o no se pudo leer<br/>";
    }else{
        while(!feof($fich))
        {
            $car = fgetc($fich); //carácter a carácter
            echo $car;
        }
    }
    fclose($fich);