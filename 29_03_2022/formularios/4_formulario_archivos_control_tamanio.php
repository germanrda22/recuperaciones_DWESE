<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fromulario archivos</title>
</head>
<body>
    <h1>Formulario con archivos</h1>

    <form action="nuevoContactoConImagenControlTamanio.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="apellidos">Correo electrónico</label>
        <input type="email" name="correo" id="correo"><br><br>

        <label for="foto">Imagen</label>
        <input type="file" name="foto" placeholder="Añeda una imagen suya">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>