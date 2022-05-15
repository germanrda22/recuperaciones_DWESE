<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario completo</title>
</head>
<body>
    <h1>Formulario comleto</h1>
    <!-- Usamos un array para guardar todos los datos que se enviarán -->
    <form action="arrayNuevoContacto.php" method="POST" id="myForm">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="contacto[nombre]" minlength="5" required="true"><br><br>

        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="contacto[apellidos]"><br><br>

        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="contacto[correo]"><br><br>

        <select name="metodosPago[]" id="metodoPago" multiple>
            <option selected>Selecciona método de pago</option>
            <option value="VISA">VISA</option>
            <option value="Mastercard">Mastercard</option>
            <option value="Paypal">Paypal</option>
       </select><br><br>

       <input type="checkbox" id="marcar" name="contacto[marcar]">
       <label for="marcar">Aceptar los términos y condiciones</label>

       <button type="submit">Enviar</button>
    </form>
</body>
</html>