<?php
class Administracion extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('administracion/index');
    }


}