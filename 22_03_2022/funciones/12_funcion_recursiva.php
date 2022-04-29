<?php
function factorial(int $numero)
{
    if($numero == 1){
        return $numero;
    }else {
        return $numero * factorial($numero - 1);
    }
}