<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
<h1>Agenda</h1>
<?php
require_once "autoload.php";
require_once "./config/config.php";

use Models\Contacto;
$contact = new Contacto;
// Hemos definido el método getAll() en el modelo
/* $miscontactos = $contact->getAll();
 */foreach ($miscontactos as $fila) {
    foreach ($fila as $campo => $valor) {
        echo "$campo: $valor <br><br>";
    }
}
?>
</body>
</html>