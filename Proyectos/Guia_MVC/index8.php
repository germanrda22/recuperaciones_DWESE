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
    require_once '.config/config.php';
    use Lib\BaseDatosEX;

    $db = new BaseDatosEX();
    $miscontactos = $db->query("SELECT * FROM contactos")->fetchAll();

    foreach($miscontactos as $row)
    {
        echo $row['nombre']."<br/>\n";
    }
    ?>
</body>
</html>