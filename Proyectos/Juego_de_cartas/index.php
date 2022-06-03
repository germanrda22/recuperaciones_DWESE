<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        use Models\Carta;
        use Controllers\FrontController;
        require_once 'autoloader.php';
        
    ?>
    <a href="views/formularioCarta.php">Mostrar carta</a>
    <?php
        require_once './controllers/FrontController.php';
        FrontController::main();
    ?>
</body>
</html>