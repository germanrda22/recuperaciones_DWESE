<?php

namespace Controllers;

class FrontController{
    public static function main()
    {
        if (!empty($_GET))
        {
            if (isset($_GET['controller'])) 
            {
                // Al llamarse todos igual acortamos la URL añadiendo directamente nosotrosController 
                $nombre_controlador = 'Controllers\\'.$_GET['controller'].'Controller';
                if(class_exists($nombre_controlador))
                {
                    $controlador = new $nombre_controlador();
                    if(isset($_GET['action']) and method_exists($controlador, $_GET['action']))
                    {
                        $action = $_GET['action'];
                        $controlador->$action();
                    }else
                    {
                        echo 'La página que buscas no existe';
                    }
                }else
                {
                    echo 'La página que buscas no existe';
                }
            }
        }else
        {
            echo "<a href='http://localhost/recuperacion_DWESE/Proyectos/Guia_MVC/?controller=Contacto&action=mostrarTodos'>Mostrar Todos</a>";
        }
    }
}