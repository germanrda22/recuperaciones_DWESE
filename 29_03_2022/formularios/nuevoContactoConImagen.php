<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario simple</title>
</head>
<body>
    <h1>Formulario con archivos</h1>
    Nuevo Contacto: <?php echo $_POST['nombre']."<br/>";?>
    Correo electrónico: <?php echo $_POST['correo']."<br/>";?>

    Fichero recibido:
    Nombre: <?= $_FILES["foto"]["name"]."<br/>"?>
    Tamaño: <?= $_FILES["foto"]["size"]." bytes <br/>"?>
    Temporal: <?= $_FILES["foto"]["tmp_name"]."<br/>"?>
    Tipo: <?= $_FILES["foto"]["type"]."<br/>"?>
    Error: <?= $_FILES["foto"]["error"]."<br/>"?>
</body>
</html>