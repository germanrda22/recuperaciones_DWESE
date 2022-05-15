<?php if((isset($_POST["accion"])) && ($_POST["accion"]=="crearcookie")):?>
    <?php
        setcookie("usuario", $_POST["tu_nombre"], time() +60);
        echo "<h1>Hola, ".$_POST["tu_nombre"]."</h1><p>Bienvenido a nuestra
        página web. ¡Actualiza la página para ver los datos de la cookie almacenada!</p>";
        if(isset($_COOKIE["usuario"]) and $_COOKIE["usuario"]!=="")
        print ("<p>La cookie <b>usuario</b> tiene el valor 
        <b>".$_COOKIE["usuario"]."</b></p>");
    ?>

<?php else: ?>

<FORM action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <input type="hidden" name="accion" value="crearcookie">
    <p>Nombre del usuario: <input type="text" name="tu_nombre"></p>
    <p><input type="submit" value="Enviar"></p>
</FORM>

<?php endif; ?>