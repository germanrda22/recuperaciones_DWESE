<?php
        /* 
         * En este ejemplo se utiliza una transformación para mostrar
         * un fichero XML como una tabla HTML
         */
	// cargar el fichero a transformar
	$dept = new DOMDocument();
	$dept->load( 'empleados.xml' );
	// cargar la transformacion
	$transformacion = new DOMDocument();
	$transformacion->load( 'departamento.xslt' );
	// crear el procesador
	$procesador = new XSLTProcessor();
	// asociar el procesador y la transformacion
	$procesador-> importStylesheet($transformacion) ;
	// transformar
	$transformada = $procesador->transformToXml($dept);
	echo $transformada;