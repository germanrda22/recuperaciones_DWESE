<?php
    setlocale(LC_ALL, "spanish");
    $fecha_nueva = strftime("%d de %B a las %T");

    if(isset($_POST['borrar']))
    {
        if(isset($_SERVER['HTTP_COOKIE']))
        {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach($cookies as $cookie)
            {
                $partes = explode('=', $cookie);
                $nombre = trim($partes[0]);
                setcookie($nombre, '', time()-100);
                unset($_COOKIE[$nombre]);
            }
        }

        $fecha_ultima = "Se ha borrado el historial de visitas";
        $contador = 0;
    }
    else
    if(isset($_COOKIE["contador"]))
    {
        $contador = $_COOKIE["contador"];
        $contador++;
        $fecha_ultima = "Fechas en las que nos ha visitado: <p>";
        for($i=sizeof($_COOKIE["fecha"]); $i > 0; $i--)
        {
            $fecha_ultima .= $_COOKIE["fecha"][$i]."</p>";
        }
        setcookie("fecha[contador]", $fecha_nueva, time()+3600);
        setcookie("contador", $contador, time()+3600);
    }
    else
    {
        $fecha_ultima = "Ésta es la primera vez que nos visita";
        setcookie("fecha[1]", $fecha_nueva, 3600);
        setcookie("contador", 1, time()+3600);
        $contador = 1;
    }
?>

<h1 style="text-align:center">Creación y destrucción cookie</h1>
<FORM action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <input type="submit" value="Borrar datos" name="borrarcookie">
    <input type="submit" value="Actualizar página" name="actualizarpagina">

    <?php $fecha_ultima;?>
</FORM>