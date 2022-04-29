<?php
namespace Vehiculo;
abstract class Vehiculo{
    public $color;
    private $numSerie;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    abstract public function getNumSerie();
}