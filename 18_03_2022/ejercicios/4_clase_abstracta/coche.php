<?php

use Vehiculo\Vehiculo;

class Coche extends Vehiculo{
    public $cilindrada;
    
    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;

        return $this;
    }

    public function getNumSerie()
    {
        return $this->numSerie;
    }
}