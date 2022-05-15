<?php
function mcd(int $a, int $b):int
{
    if($b == 0){
        return $a;
    }elseif($a == 0){
        return $b;
    }elseif($a >= $b){
        return mcd($a - $b, $b);
    }else{
        return mcd($a, $b - $a);
    }
}

echo mcd(15, 20);