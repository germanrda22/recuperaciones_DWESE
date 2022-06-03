<?php
echo "<h1>Carta: </h1>";

if(!is_dir('imagenes'))
{
    echo "No tenemos imagenes";
}else{
    $image = "../assets/img/$palo_$numero.jpg";
    if(file_exists($image))
    {
        echo "<img src='$image'/><br/>";
    }else{
        echo "No tenemos la imagen de esta carta";
    }
}
?>