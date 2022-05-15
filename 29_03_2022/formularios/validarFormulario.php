<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fromulario Saneado</title>
</head>
<body>
    <h1>Formulario Saneado</h1>
    <!-- FILTROS DE SANEAMIENTO -->

    <?=filter_var($_POST["nombre"], FILTER_SANITIZE_STRING)?><!-- Elimina etiquetas HTML -->
    <br>
    <?=filter_var($_POST["edad"], FILTER_SANITIZE_NUMBER_INT)?><!-- Mantiene digitos y signos. 
    Elimina resto de caracteres -->
    <br>
    <?=filter_var($_POST["web"], FILTER_SANITIZE_URL)?><!-- Elimina todos los caracteres excepto 
    las letras, digitos y $-_.+!*'(),{}|\\^~[]`"><#%;/?:@&= -->
    <br>
    <?=filter_var($_POST["correo"], FILTER_SANITIZE_EMAIL)?><!-- Elimina los caracteres que no son
    válidos en un email -->

    <!-- FILTROS DE VALIDACIÓN -->
    <?php
        if(!isset($_POST["nombre"]))
        {
            echo "ERROR: El campo nombre es obligatorio. <br/>";
        }
    ?>
    <?php
        if(!filter_var($_POST["edad"], FILTER_VALIDATE_INT))
        {
            echo "ERROR: El campo edad debe ser un número entero. <br/>";
        }
    ?>
    <?php
        if(!filter_var($_POST["web"], FILTER_VALIDATE_URL))
        {
            echo "ERROR: El campo web no es correcto. <br/>";
        }
    ?>
    <?php
        if(!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL))
        {
            echo "ERROR: El campo email no es correcto. <br/>";
        }
    ?>
</body>
</html>