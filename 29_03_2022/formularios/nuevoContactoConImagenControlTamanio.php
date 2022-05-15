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
    <!-- El archivo subido será imagen tipo JPEG y su tamaño no excede de 500KB -->
    <?php
        if($_FILES["foto"]["type"] != "image/jpeg")
        {
            echo "ERROR: El archivo debe ser una imagen de tipo JPEG";
        }else if($_FILES["foto"]["size"] > 512000){
            echo "ERROR: El archivo no debe exceder de 500KB";
        }else{
            echo "Fichero recibido:";
            echo "Nombre: ".$_FILES['foto']['name']."<br/>";
            echo "Tamaño: ".$_FILES['foto']['size']." bytes<br/>";
            echo "Temporal: ".$_FILES['foto']['tmp_name']."<br/>";
            echo "Tipo: ".$_FILES['foto']['type']."<br/>";
            echo "Error: ".$_FILES['foto']['error']."<br/>";

            if(!is_dir('images'))
            {
                mkdir('images', 0777); // si no existe el directorio images lo creo
            }
            // coge el archivo que está en lso temporales y lo sube
            $res = move_uploaded_file($_FILES["foto"]["tmp_name"], 'images/'.$_FILES["foto"]["name"]);
            if($res)
            {
                echo "<br><h1>Imagen subida correctamente</h1>";
            }else{
                echo "<br>Error";
            }
        }
    ?>
    
</body>
</html>