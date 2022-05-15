<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserción de vivienda</title>
</head>
<body>
    <h1 style="color:blue">Inserción de vivienda</h1>
    <p>Estos son los datos introducidos:</p>
    <ul>
        <li>Tipo: <?=$_POST["tipo"]?></li>
        <li>Zona: <?=$_POST["zona"]?></li>
        <li>Dirección: <?=$_POST["direccion"]?></li>
        <li>Número de dormitorios: <?=$_POST["n_dormitorios"]?></li>
        <li>Precio: <?=$_POST["precio"]?></li>
        <li>Tamaño: <?=$_POST["tamano"]?></li>
        <li>Extras: 
            <?=$extras = $_POST["extras"];
                foreach($extras as $extra)
                {
                    echo "$extra ";
                }
            ?>
        </li>
        <li>Observaciones: <?=$_POST["observaciones"]?></li>
    </ul>
</body>
</html>