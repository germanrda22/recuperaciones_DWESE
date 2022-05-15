<?php

namespace Controllers;
use Models\Contacto;

class ContactoController
{

    public function mostrarTodos()
    {
        $contacto = new Contacto();
        $todos_mis_contactos = $contacto->conseguirTodos();
        require_once 'views/contacto/mostrar_todos.php';
    }

    /* public function crear()
    {
        
    } */

    public function borrar(){
        $contacto = new Contacto();
        $contacto_borrar = $contacto->borrar();
        require_once 'views/contacto/borrar.php';
    } 

    /* public function modificar(){

    } */
}