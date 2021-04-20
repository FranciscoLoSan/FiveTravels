<?php
class Destino extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('destino/index');
    }

}