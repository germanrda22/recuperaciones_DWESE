<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>
<body>
    <?php
        require_once("persona.php");
        $luis = new Persona();
        $luis->setNombre("Luis Miguel");
        $luis->setApellidos("Cabezas Granado");
        $luis->setDni("08868143X");
    ?>
    <h1>
        Datos de <?= $luis->getNombre() . " " . $luis->getApellidos();?>
    </h1>
    <h2>
        DNI <?= $luis->getDni() ?>
    </h2>
</body>
</html>