<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Agenda</h1>
    <?php
    require_once 'Models/Contacto.php';
    use Models\Contacto;

    $micontacto = new Contacto('1','Ricardo','Solano Pérez','ric@gmail.com','C/Aguamarina, 7','958121212','198-05-06');
    $nombrecontacto = $micontacto->getNombre();

    echo "El nombre del contacto es $nombrecontacto";
    ?>
</body>
</html>