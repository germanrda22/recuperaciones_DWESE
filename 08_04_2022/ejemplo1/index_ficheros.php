<?php
/*
    abrir un fichero en modo lectura (como en Linux: r lectura, x ejecución, w de escritura)
    $archivo = fopen("fichero_texto.txt", "r");
*/
$archivo = fopen("fichero_texto.txt", "a+"); //de esta forma podemos escribir y leer el contenido

//leer el contenido del archivo de todas las líneas
//necesito un bucle que lo recorra mientras no sea el fin del archivo
while(!feof($archivo))
{
    $contenido = fgets($archivo); //obtiene una línea del fichero
    echo $contenido."<br/>";
}

//escribir dentro de un archivo
fwrite($archivo, "<br/> y este texto se introduce desde PHP");

//cerrar el archivo
fclose($archivo);

//copiar un fichero de texto
copy("fichero_texto.txt", "fichero_copiado.txt")or die("error al copiar");

//renombrar fichero 
rename("fichero_copiado.txt", "fichero_renombrado.txt");

//eliminar un archivo
unlink("fichero_renombrado.txt")or die("error al borrar");

//comprobar si un fichero existe
if(file_exists("fichero_texto.txt"))
{
    echo "El fichero existe";
}else{
    echo "El fichero no existe";
}