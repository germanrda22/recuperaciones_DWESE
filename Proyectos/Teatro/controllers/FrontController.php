<?php

namespace Controllers;

class FrontController{
    public static function main()
    {
        function show_error()
        {
            $error = new ErrorController(); // Usamos este controlador para mostrar los errores
            $error->index();
        }
        
        if (isset($_GET['controller'])) 
        { 
            // Al llamarse todos igual acortamos la URL añadiendo directamente nosotrosController 
            $nombre_controlador = 'Controllers\\'.$_GET['controller'].'Controller';
        

        }elseif(!isset($_GET['controller']) and !isset($_GET['action'])){
                $nombre_controlador = controller_default; // Se establece un archivo de parámetros
        }else
        {
            show_error();
            exit();
        }
            
        // Si todo va bien creamos una instancia del controlador y llamamos a la acción
            
        if(class_exists($nombre_controlador))
        {
            $controlador = new $nombre_controlador();
            if(isset($_GET['action']) and method_exists($controlador, $_GET['action']))
            {
                $action = $_GET['action'];
                $controlador->$action();
            }elseif(!isset($_GET['controller']) and !isset($_GET['action']))
            {
                $action_default = action_default;
                $controlador->$action_default();
            }else
            {
                show_error();
            }
        }else
        {
            show_error();
        }
    }
}