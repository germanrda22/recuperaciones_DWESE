<?php
class PersonaP{
    public function __construct(private string $nombre,
    private string $apellidos,
    private string $dni)
    {
        
    }
}

$persona = new PersonaP("Pako", "González", "1451065Y");

echo "<pre>";
var_dump($persona);
echo "</pre>";