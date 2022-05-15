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
    require_once "./config/parameters.php";

    require_once 'controllers/FrontController.php';
    use Controllers\FrontController;
    ?>
    <?php if(!empty($_GET['controller'])):?>
    <?php
    FrontController::main();
    ?>
    <?php else: ?>
        <a href="https://localhost/recuperacion_DWESE/Proyectos/Guia_MVC/index6.php?controller=Contacto&action=mostrarTodos">Mostrar todos mis contactos</a>
    <?php endif;?>
</body>
</html>