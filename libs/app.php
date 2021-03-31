<?php 
require_once 'controllers/errorController.php';

class App{
    function __construct(){
        //echo'<p>Hola desde clase enrutadora</p>';
        $url = isset($_GET['url']) ? $_GET['url'] : null; 
        $url = rtrim($url, '/');//[rtrim] elimina caracterer que le indiquemos si hay mas de uno junto en la string
        $url = explode('/', $url);//Busca caracter especial para dividir el string '/'

        // cuando se ingresa sin definir controlador
        if(empty($url[0])){
            $archivoController = 'controllers/mainController.php';
            require_once $archivoController;
            $controller = new MainController();
            $controller->loadModel('mainController');
            $controller->render();
            return false;
        }

        $archivoController = 'controllers/'. $url[0] .'.php';
        if(file_exists($archivoController)){
            require_once $archivoController;

            // se inicializa controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            if(isset($url[1])){
                $controller -> {$url[1]}();
            } else {
                $controller->render();
            }

        } else {
            $controller = new ErrorController();
        }
    }

}

?>