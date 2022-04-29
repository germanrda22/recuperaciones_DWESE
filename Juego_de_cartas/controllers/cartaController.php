<?php
namespace Controllers;
use Models\Carta;

class CartaController
{
    private Carta $carta;

    public function formCarta()
    {
        require_once 'formularioCarta.php';
    }

    public function mostrarCarta()
    {
        require_once 'views/mustra_carta.php';
    }

    public function nuevaCarta()
    {
        if(isset($_GET['numero']) && isset($_GET['palo']))
        {
            $numero = $_GET['numero'];
            $palo = $_GET['palo'];

            $carta = new Carta($numero, $palo);
        }
    }
}