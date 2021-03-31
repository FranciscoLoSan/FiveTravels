<?php
/**
 * Esta clase toma los datos de app para poderlos usar.
 * 
 */
class Controller {
    function __construct(){
        $this->view = new View();
    }

    function loadModel($model) {
        /**
         * En este método se inicializa instancía un objeto model (modelo base) para luego
         * ser usado en las clases extendidas del modelo base
         */
        $url = 'models/'. $model . 'Model.php';

        if(file_exists($url)){
            require $url;

            $modelName = $model. 'Model';
            $this->model = new $modelName();
        }
    }
}