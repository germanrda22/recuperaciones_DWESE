<?php
if($_COOKIE['micookie'])
{
    unset($_COOKIE['micookie']);
    setcookie('micookie','', time()-100);// caducarla. Para ello se resta un valor de time
}
//redireccionar
header('crear_cookies.php');