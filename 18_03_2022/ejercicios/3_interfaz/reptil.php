<?php
use Animal\Animal;
class Reptiles implements Animal{
    public $cuerpo;
    public $respiracion;
    public $extremidades;
    public $desplazamiento;
    public $reproduccion;
    public $habitat;
    
    public function getCuerpo()
    {
        return $this->cuerpo;
    }

    public function getRespiracion()
    {
        return $this->respiracion;
    }

    public function getExtremidades()
    {
        return $this->extremidades;
    }

    public function setExtremidades($extremidades)
    {
        $this->extremidades = $extremidades;

        return $this;
    }
 
    public function getDesplazamiento()
    {
        return $this->desplazamiento;
    }

    public function setDesplazamiento($desplazamiento)
    {
        $this->desplazamiento = $desplazamiento;

        return $this;
    }

    public function getReproduccion()
    {
        return $this->reproduccion;
    }

    public function getHabitat()
    {
        return $this->habitat;
    }

    public function setHabitat($habitat)
    {
        $this->habitat = $habitat;

        return $this;
    }
}