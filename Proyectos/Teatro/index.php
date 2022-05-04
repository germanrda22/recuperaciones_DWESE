<?php
    if(file_exists("asientos_teatro.txt"))
    {
        $archivo = fopen("asientos_teatro.txt", "a+");
        $asientos = [];
        while(!feof($archivo))
        {
            if($linea = fgets($archivo)) //obtiene una línea del fichero
            {
                if(str_contains($linea, "|"))
                {
                    $teatro = explode("|", $linea);
                }else{
                    $fila = explode('', $linea);
                    array_push($asientos, $fila);
                }
            }
        }
    }else
    {
        echo "El fichero no existe";
    }

    

    
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teatro</title>
</head>
<body>
    <h1>Comprar entradas de teatro</h1>
    <h2>¡Bienvenid@ a la página de reserva de localidades!</h2>
    <h3>Nombre teatro: <?php echo $teatro[0]?></h3>
    <h3>Nombre obra teatral: <?php echo $teatro[1]?></h3>
    <h3>Sesión: <?php echo $teatro[2]?></h3>
    <h3>Día: <?php echo $teatro[3]?></h3>
</body>
</html>