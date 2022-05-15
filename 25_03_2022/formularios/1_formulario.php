<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario simple</title>
</head>
<body>
    <h1>Formulario simple</h1>

    <form action="nuevoContacto.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos"><br><br>

        <input type="checkbox" id="marcar" name="marcar">
        <label for="marcar">Aceptar los términos y condiciones</label>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>