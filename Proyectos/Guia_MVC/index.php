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

        require_once 'autoload.php';
        require_once 'controllers/FrontController.php';
        use Controllers\FrontController;


        FrontController::main();
        // $controlador = new ContactoController();
        // Llamar de forma dinámica a ContactoController poniendo en la URL /?action=mostrarTodos

    ?>
    <?php
        require_once 'views/footer.php';
    ?>
</body>
</html>