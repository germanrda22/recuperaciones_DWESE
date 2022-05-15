<?php
class PersonaC{
    public $nombre;
    public $apellidos;
    public $dni;
    function __construct($nombre, $apellidos, $dni)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->dni = $dni;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }
}