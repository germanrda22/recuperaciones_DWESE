<?php
namespace Models;

class Carta
{

    const palos = ["ESPADAS", "OROS", "COPAS", "BASTOS"];
    const cartas = [1=>"as", 2=>"dos", 3=>"tres", 4=>"cuatro",
                    5=>"cinco", 6=>"seis", 7=>"siete", 8=>"ocho",
                    9=>"nueve", 10=>"sota", 11=>"caballo", 12=>"rey"];

    function __construct(private int $numero,
                        private string $palo)
    {
    
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero(int $numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getPalo()
    {
        return $this->palo;
    }

    public function setPalo(string $palo)
    {
        $this->palo = $palo;

        return $this;
    }

    public function compruebaPalo($palo):bool
    {
            return in_array($palo, self::palos);
    }

    public function compruebaNumero($value):bool
    {
        if($value >= 1 && $value <= 12)
        {
            return true;
        }

        return false;
    }

    public function __toString()
    {
        $numero = self::cartas[$this->numero];
        return $numero. " de ".$this->palo;
    }
}