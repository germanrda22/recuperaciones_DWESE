<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Completo</title>
</head>
<body>
    <h1>Formulario completo</h1>
    <?php $contacto = $_POST["contacto"];?>

    Nuevo Contacto: <?=$contacto["nombre"]." ".$contacto["apellidos"]."<br/>"?>
    Correo: <?=$contacto["correo"]."<br/>"?>

    Métodos de Pago:
    <?php
        $metodosPago = $_POST["metodosPago"];
        foreach($metodosPago as $metodoPago)
        {
            echo "[$metodoPago]";
        }
    ?>
</body>
</html>