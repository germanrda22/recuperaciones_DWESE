<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivienda</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $error = false;

            //sanea y valida
            require_once('sanea_valida.php');
        }

        //Si los datos son correctos, procesar formulario
        if (isset($_REQUEST['insertar']) && $error==false)
        {}
        // Mover foto a su ubicación definitiva
        if (!is_dir('fotos')){
            mkdir('fotos',0777); // si no existe el directorio fotos lo creo       
        }
        if ($copiarFichero)
        move_uploaded_file ($_FILES['foto']['tmp_name'], $nombreDirectorio . $nombreFichero);
    ?>
    <h1>Estos son los datos introducidos:</h1><br>
   <UL>
     <LI>Tipo:<?php echo $tipo ?></LI>
     <LI>Zona:<?php echo $zona ?></LI>
     <LI>Dirección:<?php echo $direccion ?></LI>
     <LI>Número de dormitorios:<?php echo $ndormitorios ?></LI>
     <LI>Precio:<?php echo $precio ?></LI>
     <LI>Tamaño:<?php echo $tamano ?> metros cuadrados</LI>
     <LI>Extras:
<?php
     
     foreach ($extras as $extra)
        print ($extra . " ");

     print ("\n");

     if ($copiarFichero == true)
        print ("   <LI>Foto: <A TARGET='_blank' HREF='$nombreDirectorio$nombreFichero'>$nombreFichero</A>\n");
     else
        print ("   <LI>Foto: (no hay)\n");

?>
   <LI>Observaciones:<?php echo $observaciones ?></LI>
</UL>
<P><A HREF='3_inmobiliaria.php'>Insertar otra vivienda</A></P>
    <h1 style="color:blue">Inserción de vivienda</h1>
    <p>Introduzca los datos de la vivienda:</p>
    <form action="nuevaVivienda.php" method="POST" enctype="multipart/form-data">
        <label for="tipo">Tipo de vivienda:</label>
        <select name="tipo" id="tipo">
            <option value="Piso">Piso</option>
            <option value="Adosado">Adosado</option>
            <option value="Chalet">Chalet</option>
            <option value="Casa">Casa</option>
        </select><br><br>
        <?php
            if(!isset($_POST["tipo"]))
            {
                echo "<p style='color:red'>ERROR: El campo tipo es obligatorio. </p><br/>";
            }
        ?>

        <label for="zona">Zona:</label>
        <select name="zona" id="zona">
            <option value="Centro">Centro</option>
            <option value="Nervión">Nervión</option>
            <option value="Triana">Triana</option>
            <option value="Aljarafe">Aljarafe</option>
            <option value="Macarena">Macarena</option>
        </select><br><br>
        <?php
            if(!isset($_POST["zona"]))
            {
                echo "<p style='color:red'>ERROR: El campo zona es obligatorio. </p><br/>";
            }
        ?>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion"><br><br>
        <?=filter_var($_POST["direccion"], FILTER_SANITIZE_STRING)?>
        <?php
            if(!isset($_POST["direccion"]))
            {
                echo "<p style='color:red'>ERROR: El campo direccion es obligatorio. </p><br/>";
            }
        ?>

        <label for="n_dormitorios">Número de dormitorios:</label>
        <input type="radio" name="n_dormitorios" value="1"><label for="1">1</label>
        <input type="radio" name="n_dormitorios" value="2"><label for="2">2</label>
        <input type="radio" name="n_dormitorios" value="3"><label for="3">3</label>
        <input type="radio" name="n_dormitorios" value="4"><label for="4">4</label>
        <input type="radio" name="n_dormitorios" value="5"><label for="5">5</label><br><br>
        <?php
            if(!isset($_POST["n_dormitorios"]))
            {
                echo "<p style='color:red'>ERROR: El campo número dormitorios es obligatorio. </p><br/>";
            }
        ?>

        <label for="precio">Precio:</label>
        <input type="number" name="precio"> €<br><br>
        <?=filter_var($_POST["precio"], FILTER_SANITIZE_NUMBER_INT)?>
        <?php
            if(!isset($_POST["precio"]))
            {
                echo "<p style='color:red'>ERROR: El campo precio es obligatorio. </p><br/>";
            }
        ?>

        <label for="tamano">Tamaño:</label>
        <input type="number" name="tamano"> metros cuadrados <br><br>
        <?=filter_var($_POST["tamano"], FILTER_SANITIZE_NUMBER_INT)?>
        <?php
            if(!filter_var(($_POST["tamano"]), FILTER_VALIDATE_INT))
            {
                echo "<p style='color:red'>ERROR: El campo tamano es obligatorio. </p><br/>";
            }
        ?>

        <label for="extras">Extras (marque los que procedan):</label>
        <input type="checkbox" name="extras[]"><label for="piscina">Piscina</label>
        <input type="checkbox" name="extras[]"><label for="jardin">Jardín</label>
        <input type="checkbox" name="extras[]"><label for="garage">Garage</label><br><br>

        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto"><br><br>

        <label for="observaciones">Observaciones:</label>
        <textarea name="observaciones" cols="50" rows="5" style="resize: none;" placeholder="Observaciones"></textarea>
        <?= filter_var($_POST['observaciones'], FILTER_SANITIZE_STRING) ?><br><br>

        <button type="submit">Insertar vivienda</button>
    </form>
</body>