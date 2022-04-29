<?php
/* ejemplo de funciones anónimas:
 * utilizar una funcion anónima como callback para multiplicar
 * los elementos de la misma posición de cada uno de los arrays.
 */
$multiplicador = function($a, $b)
{
    return $a * $b;
};
$numeros = range(1, 10); // range crea un array que contiene un rango de elementos
echo "primer array: ".implode(" ", $numeros)."<br/>";
$numeros2 = range(1, 10);
echo "segunco array: ".implode(" ", $numeros2)."<br/>";
$lista = array_map($multiplicador, $numeros, $numeros2);
echo "Multiplicados: ".implode(" ", $lista); //implode une elementos de un array en un string