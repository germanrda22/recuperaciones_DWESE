<?php
function tablaMultiplicar(int $num = 1){
    for($mult = 1; $mult <= 10; $mult++)
    {
        echo "$mult x $num = ". $mult*$num ."<br/>";
    }
}

if (isset($_GET['num'])){
    tablaMultiplicar($_GET['num']);
}else{
    tablaMultiplicar();
}
