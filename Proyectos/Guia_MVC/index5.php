<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>Agenda</h1>
    <?php
        require_once 'autoload.php';
        use Controllers\ContactoController;
        if(!empty($_GET)){
            if (isset($_GET['controller'])) { // Al llamarse todos igual acortamos la URL añadiendo nosotros Controller
                $nombre_controlador = 'Controllers\\' . $_GET['controller'] . 'Controller';
                if (class_exists($nombre_controlador)) {
                    $controlador = new $nombre_controlador();
                    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
                        $action = $_GET['action'];
                        $controlador->$action();
                    } else{
                        echo "La página que buscas no existe";
                    }
                }else{
                    echo "La página que buscas no existe";
                }
            }else{
                echo "La página que buscas no existe";
                exit();
            }
        }else{
            echo 'No hay variables por $_GET';
        }
    ?>
</body>
</html>