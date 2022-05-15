<?php

namespace Lib;

use PDO;
use PDOException;

class BaseDatos
{
    private PDO $conn;
    private mixed $resultado; //mixed novedad en PHP cualquier valor

    public function __construct(
        private string $servidor = SERVIDOR,
        private string $usuario = USUARIO,
        private string $pass = PASS,
        private string $base_datos = BASE_DATOS
    ){
        $this->conexion = $this->conectar();
    }

    private function conectar(): PDO
    {
        try{
            $opciones = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::MYSQL_ATTR_FOUND_ROWS => true
            );
        $conn = new PDO("mysql:host={$this->servidor}; dbname={$this->base_datos}", $this->usuario, $this->pass, $opciones);
        return $conn;
        }catch(PDOException $e){
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: '. $e->getMessage();
            exit;
        }
    }

    public function consulta(string $consultaSQL): void
    {
        $this->resultado = $this->conectar()->query('select * from contactos');
    }
    public function extraer_registro()
    {
        return ($contact = $this->conexion->extraer_registro())?$contact:null;
    }
}