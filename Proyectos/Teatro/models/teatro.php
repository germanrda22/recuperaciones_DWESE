<?php
namespace Models;

class Teatro
{
    private string $nombre;
    private string $obra;
    private string $hora;
    private string $dia;
    private array $butaca;

    public function __construct(private string $nombre_fichero)
    {
        $fichero = file($nombre_fichero, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
        for($i = 0; $i < 2; $i++)
        {
        if($i == 0)
        {
            $datos = explode("|",$fichero[$i]);
            $this->setNombre($datos[0]);
            $this->setObra($datos[1]);
            $this->setHora($datos[2]);
            $this->setDia($datos[3]);
            unset($fichero[$i]);
        }else
        {
            $this->setButaca($fichero);
        }
        }
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

    public function getObra()
    {
        return $this->obra;
    }

    public function setObra($obra)
    {
        $this->obra = $obra;

        return $this;
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    public function getDia()
    {
        return $this->dia;
    }

    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    public function getButaca()
    {
        return $this->butaca;
    }

    public function setButaca($butaca)
    {
        $this->butaca = $butaca;

        return $this;
    }

    
}