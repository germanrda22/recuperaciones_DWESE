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

require_once 'models/Contacto.php';
use Models\Contacto;

$micontacto = new Contacto('1', 'Ricardo', 'Solano Pérez', 'ric@gmail.com', 'C/ Aguamarina, nº7', '958121212', '1/7/2000');
$nombrecontacto = $micontacto->getNombre(); // Acceder al nombre del objeto

echo "El nombre del contacto es $nombrecontacto";
?>

</body>
</html>