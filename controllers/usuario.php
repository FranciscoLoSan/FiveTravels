<?php
class Usuario extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('usuario/index');
    }


}