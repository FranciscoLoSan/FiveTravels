<?php
class Main extends Controller{
    function __construct(){
        parent::__construct();
        echo "<p>Controlador main</p>";
    }

    function render() {
        $this->view->render('main/index');
    }

    function Saludo() {
        echo "<p>Ejecutaste el metodo Saludo</p>";
    }
}