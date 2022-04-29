<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario Saneado</h1>

    <form action="validarFormulario.php" role="form" method="POST" enctype="multipart/form-data">
        <label for="ombre">Nombre</label>
        <input type="text" name="nombre" minlength="5" required="true"><br><br>

        <label for="edad">Edad</label>
        <input type="text" name="edad" required="true"><br><br>

        <label for="web">Página web</label>
        <input type="text" name="web" required="true"><br><br>

        <label for="correo">Correo electrónico</label>
        <input type="text" name="correo"><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>