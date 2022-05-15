<?php
// crear cookies
// setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

// cookie básica
setcookie("micookie", "valor de mi galleta");

// cookie con expiracion dentro de un año

setcookie("unyear", "valor de mi cookie 365 días", time()+(60*60*24*365));
?>
<a href="ver_cookies.php">Ver las cookies</a>