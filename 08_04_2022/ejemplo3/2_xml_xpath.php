<?php
	$datos = simplexml_load_file("empleados.xml");	
        /*
         * el método xpath permite seleccionar elementos usando una expresión
         */
	$edades = $datos->xpath("//edad");
	foreach($edades as $valor){
		print_r($valor);
		echo "<br>";
	}