<?php
class PersonaA{
    public string $nombre;
    public string $apellido1;
    public string $apellido2;
    
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
        return $this->apellido1 . " " . $this->apellido2; 
    }
}

class PersonaUSA extends PersonaA{
    public $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    //supongamos que en Usa primero se pone el segundo apellido y luego el primero
    //redefinimos el método

    public function getApellidos(){
        return $this->apellido2 ." ". $this->apellido1;
    }
}

function cambiaNombre(PersonaA $persona, string $nombre){
    $persona->setNombre($nombre);
}