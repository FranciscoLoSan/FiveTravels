<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/styles.css">
    <script src="https://kit.fontawesome.com/2016c99257.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <div class="logo">
            <h1 class="logo__nombre">Five<span class="logo__nombre--azul">Travels</span><span class="logo__nombre--azul"><i class="fas fa-globe"></i></span></h1>
        </div>

        <div class="buscador">
            <input type="text" name="" id="" class="buscador__barra">
            <i class="fas fa-map-marker-alt"></i>
        </div>
        
        <nav class="navegacion">
            <ul class="navegacion__enlaces">
                <li><a href="<?php echo constant('URL') ?>login" class="navegacion__enlaces--enlace">Iniciar</a></li>
                <li><a href="<?php echo constant('URL') ?>ofertas" class="navegacion__enlaces--enlace">Ofertas</a></li>
                <li><a href="<?php echo constant('URL') ?>misViajes" class="navegacion__enlaces--enlace">Mis vaijes</a></li>
                <li><a href="<?php echo constant('URL') ?>contacto" class="navegacion__enlaces--enlace">Contacto</a></li>
            </ul>
        </nav>
    </header>