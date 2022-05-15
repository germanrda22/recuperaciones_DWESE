<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teatro</title>
</head>
<body style="background-color:lightslategray;">
    <?php
        require_once './models/teatro.php';
        use Models\Teatro;

        $teatro = new Teatro('asientos_teatro.txt');

        require_once './views/cabecera.php';
        require_once './views/escenario.php';
        require_once './views/formulario.php';
    ?>
</body>
</html>