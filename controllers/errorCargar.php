<?php
class ErrorController extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Error genérico";
        $this->view->render('error/index');
    }
}