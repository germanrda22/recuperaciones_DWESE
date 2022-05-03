<?php
/*
Usando una cookie de tipo array se muestran las últimas visitas que ha realizado el visitante a la página 
en orden cronológico y permite eliminar las cookies almacenadas en el navegador.

Asignar varios valores a una misma cookie es útil y necesario para no alcanzar el límite
de cookies permitido por el navegador del usuario. 

*/
 // Formateamos la fecha actual
 setlocale(LC_ALL,"spanish");
 $fecha_nueva=strftime("%A, %d de %B de %Y %H:%M:%S");
 
 // Si el usuario ha pulsado el botón Borrar cookie entonces la borramos
 if (isset($_POST['borrar'])) {
  // Vemos si hay definidas cookies
  if (isset($_SERVER['HTTP_COOKIE'])) {
   // Separamos todas las cookies mediante el caracter ";"
   $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
   // Recorremos todas las cookies en la matriz
   foreach($cookies as $cookie) {
    // Ahora separamos en partes el contenido de la cookie
    $partes = explode('=', $cookie);
    // La primera parte es el nombre de la cookie
    $nombre = trim($partes[0]);
    // Para borrar la cookie hay que indicar un tiempo anterior al actual
    setcookie($nombre, '', time()-1000);
   }
  }
  // Texto nuevo al visitante
  $fecha_ultima = "Se ha borrado el histórico de visitas.";
  $contador=0;
 }
 else 
 // Si existe la cookie contador, aumentamos el contador de visitas
 if (isset($_COOKIE["contador"]))   
 {
  $contador=$_COOKIE["contador"];   
  //aumentamos la cuenta en 1
  $contador++;
  $fecha_ultima = "Fechas en las que nos ha visitado:<P>";
  // Recorremos en orden inverso el cookie "fecha" que es de tipo matriz
  for ($i=sizeof($_COOKIE["fecha"]); $i>0; $i--) {
   $fecha_ultima .= $_COOKIE["fecha"][$i]. "<P>";
  }
  // Guardamos el elemento $contador de la matriz fecha de tipo cookie
  SetCookie("fecha[$contador]",$fecha_nueva, time()+3600000);
  // Cookie normal para almacenar el contador de visitas
  SetCookie("contador",$contador, time()+3600000); 
 }
 else  //si la cookie no existe, la creamos
 {  
  $fecha_ultima = "Ésta es la primera vez que nos visita";
  SetCookie("fecha[1]",$fecha_nueva, time()+3600000);
  SetCookie("contador",1, time()+3600000); 
  $contador=1;
 }
 
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo cookie matriz</title>
  
</head>


<body>
 <h1>CONTROL VISITAS PAGINA CON COOKIES</h1>
 <BR>
  <FORM method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <INPUT TYPE="submit" name="borrar" value="Borrar cookie"> 
  <INPUT TYPE="submit" name="recargar" value="Recargar página">
     </FORM>
  <P><TABLE>
  <TR>
   <TH colspan='2'>&nbsp;
    
     Usted ha visitado esta página <?php echo $contador ?>
     veces.<P> <?php echo $fecha_ultima ?>&nbsp
   </TH>
  </TR></TABLE>


</body>
</html>