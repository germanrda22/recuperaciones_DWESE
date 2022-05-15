<?php

namespace Models;

use Lib\BaseDatos;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Contacto
{
        private BaseDatos $conexion;
        private string $id;
        private string $nombre;
        private string $apellidos;
        private string $correo;
        private string $direccion;
        private string $telefono;
        private ?string $fecha_nacimiento;

        public function __construct()
        {
            $this->conexion = new BaseDatos();
        }

        /**
         * Get the value of id
         */ 
        public function getId(): int
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId(int $id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre(): string
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre(string $nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellidos
         */ 
        public function getApellidos(): string
        {
                return $this->apellidos;
        }

        /**
         * Set the value of apellidos
         *
         * @return  self
         */ 
        public function setApellidos(string $apellidos)
        {
                $this->apellidos = $apellidos;

                return $this;
        }

        /**
         * Get the value of correo
         */ 
        public function getCorreo(): string
        {
                return $this->correo;
        }

        /**
         * Set the value of correo
         *
         * @return  self
         */ 
        public function setCorreo(string $correo)
        {
                $this->correo = $correo;

                return $this;
        }

        /**
         * Get the value of direccion
         */ 
        public function getDireccion(): string
        {
                return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         * @return  self
         */ 
        public function setDireccion(string $direccion)
        {
                $this->direccion = $direccion;

                return $this;
        }

        /**
         * Get the value of telefono
         */ 
        public function getTelefono(): string
        {
                return $this->telefono;
        }

        /**
         * Set the value of telefono
         *
         * @return  self
         */ 
        public function setTelefono(string $telefono)
        {
                $this->telefono = $telefono;

                return $this;
        }

        /**
         * Get the value of fecha_nacimiento
         */ 
        public function getFecha_nacimiento(): string
        {
                return $this->fecha_nacimiento;
        }

        /**
         * Set the value of fecha_nacimiento
         *
         * @return  self
         */ 
        public function setFecha_nacimiento(?string $fecha_nacimiento)
        {
                $this->fecha_nacimiento = $fecha_nacimiento;

                return $this;
        }

        /**
         * Mostrar todos los contactos
         * 
         * @return self
         */
        public function conseguirTodos() : array
        {   
            $contactos = [];
            return $contactos;
        }

        public function borrar() : string
        {
                return "Se han borrado todos los contactos de tu agenda";
        }

}