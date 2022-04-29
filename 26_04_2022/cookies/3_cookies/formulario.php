<?php 
    $resultadoStr = "";

    if(isset($_POST["crearcookie"]))
    {
        if(trim($_POST["tu_nombre"])=='')
        {
            $resultadoStr .= "ERROR: debes indicar el nombre del usuario";
        }else{
            if(is_numeric($_POST["duracion"]) and $_POST["duracion"]>0 and $_POST["duracion"]<61)
            {
                setcookie("usuario", $_POST["tu_nombre"], time() + $_POST["duracion"]);
                $resultadoStr .= "<h1>Hola, ".$_POST["tu_nombre"]."</h1><p>Bienvenido a nuestra
                página web. ¡Presiona el boton actualizar para ver los datos de la 
                cookie almacenada!</p>";
            }else{
                $resultadoStr .= "El campo duracion no es numérico o no está entre 1 y 60";
            }
        }
    }

    else if(isset($_POST["borrarcookie"]))
    {
        if(isset($_COOKIE['usuario']))
        {
            unset($_COOKIE['usuario']);
            setcookie('usuario','', time()-100);// caducarla. Para ello se resta un valor de time
            $resultadoStr .= "La cookie ha sido borrada. ¡Pulsa el boton Actualizar página para ver el resultado!";
        }else{
            $resultadoStr .= "ERROR: no existe ninguna cookie";
        }
    }

    else
    {
        if(isset($_COOKIE["usuario"]) and $_COOKIE["usuario"]!=="")
        {
            $resultadoStr .= "<h1>Hola, ".$_POST["tu_nombre"]."</h1><p>Bienvenido a nuestra
            página web. ¡Presiona el boton actualizar para ver los datos de la 
            cookie almacenada!</p><p>La cookie <b>usuario</b> tiene el valor 
            <b>".$_COOKIE["usuario"]."</b></p>";
        }else{
            $resultadoStr .= "ERROR: no existe la cookie";
        }
    }
?>
<h1 style="text-align:center">Creación y destrucción cookie</h1>
<FORM action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <p>Nombre del usuario: <input type="text" name="tu_nombre"></p>
    <p>Duración cookie (entre 1 y 60 segundos): <input type="number" name="duracion" min="1" max="60"></p>
    <p>
        <input type="submit" value="Crear cookie" name="crearcookie">
        <input type="submit" value="Borrar cookie" name="borrarcookie">
        <input type="submit" value="Actualizar página" name="actualizarpagina">
    </p>
</FORM>
<?php echo $resultadoStr; ?>