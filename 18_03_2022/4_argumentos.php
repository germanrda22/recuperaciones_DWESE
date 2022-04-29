<?php
class PersonaP{
    public function __construct(private string $nombre,
    private string $apellidos,
    private string $dni)
    {
        
    }
}

$persona = new PersonaP(apellidos: "González", nombre: "Pako", dni: "1451065Y");

echo "<pre>";
var_dump($persona);
echo "</pre>";