<?php
class MainAdministrar extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('mainAdministrar/index');
    }

    function Saludo() {
        echo "<p>Ejecutaste el metodo Saludo</p>";
    }
}