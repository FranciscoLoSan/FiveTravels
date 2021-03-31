<?php
class MainController extends Controller{
    function __construct(){
        parent::__construct();
        echo "<p>Nuevo controlador Main</p>";
    }

    function render() {
        $this->view->render('main/index');
    }

    function Saludo() {
        echo "<p>Ejecutaste el metodo Saludo</p>";
    }
}