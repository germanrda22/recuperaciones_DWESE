<?php
function tiradaAzar()
{
    $tiradas = rand(1, 10);
    $dados = [];
    for($i = $tiradas; $i >= 1; $i--)
    {
        array_push($dados, rand(1, 6));
    }
    return $dados;
}

$tirada = tiradaAzar();
var_dump($tirada);

function dadoEliminar()
{
    return rand(1, 6);
}

$dado = dadoEliminar();
echo $dado;

function eliminaDados($tirada, $dado)
{
    for($pos = 0; $pos < count($tirada); $pos++)
    {
        if(($clave = array_search($dado, $tirada)) !== false)
        {
            unset($tirada[$clave]);
        }
    }
    

    return $tirada;
}

var_dump(eliminaDados($tirada, $dado));