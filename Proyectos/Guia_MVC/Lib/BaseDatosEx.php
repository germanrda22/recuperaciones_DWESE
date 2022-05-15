<?php

namespace Lib;

use PDO;
use PDOException;

class BaseDatosEx extends PDO
{
    private PDO $conn;
    private mixed $resultado; //mixed novedad en PHP cualquier valor

    public function __construct(
        private $tipo_base = 'mysql',
        private string $servidor = SERVIDOR,
        private string $usuario = USUARIO,
        private string $pass = PASS,
        private string $base_datos = BASE_DATOS
    ){
        try{
            $opciones = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::MYSQL_ATTR_FOUND_ROWS => true
            );
            parent::__construct("{$this->tipo_base}:dbname={$this->base_datos};host={$this->servidor}", $this->usuario, $this->pass, $opciones);
        }catch(PDOException $e){
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: '. $e->getMessage();
            exit;
        }
    }
}