<?php
$pi = 3.14;
function valor_pi()
{
    global $pi;
    if (!isset($pi))
    {
        $pi = pi();
    }
    return $pi;
}

echo valor_pi();