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
    require_once "autoloader.php";

    use Controllers\ContactoController;
    use Models\Contacto;

    $controlador = new ContactoController();
    $controlador->mostrarTodos();
    ?>
</body>
</html>