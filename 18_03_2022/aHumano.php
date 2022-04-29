<?php
abstract class Humano{
    private $nombre;
    private $apellido1;
    private $apellido2;

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function setApellidos(string $apellido1, string $apellido2){
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }

    public function getApellidos(){
        return $this->getApellido1() ." ". $this->getApellido2();
    }

    protected function getApellido1()
    {
        return $this->apellido1;
    }

    protected function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    public function getApellido2()
    {
        return $this->apellido2;
    }

    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    abstract public function getNombreCompleto();
}