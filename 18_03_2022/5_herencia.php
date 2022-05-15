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
        require_once("persona_a.php");
        $luis = new PersonaUSA();
        $luis->setNombre("Luis Miguel");
        $luis->setApellidos("Cabezas", "Granado");
        $luis->setId("66612345");
    ?>
    <h1>
        Datos de <?= $luis->getNombre() . " " . $luis->getApellidos();?>
    </h1>
    <h2>
        ID <?= $luis->getId() ?>
    </h2>
    <?php
        cambiaNombre($luis, "Pedro");
        echo $luis->getNombre();
    ?>
</body>
</html>