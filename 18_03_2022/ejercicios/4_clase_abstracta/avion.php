<?php

use Vehiculo\Vehiculo;

class Avion extends Vehiculo{
    public $tipo;
    public $asientos;

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getAsientos()
    {
        return $this->asientos;
    }

    public function setAsientos($asientos)
    {
        $this->asientos = $asientos;

        return $this;
    }

    public function getNumSerie()
    {
        return $this->numSerie;
    }
}