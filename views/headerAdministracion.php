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

        
        
        <nav class="navegacion">
            <ul class="navegacion__enlaces">
                <li><a href="<?php echo constant('URL') ?>usuario" class="navegacion__enlaces--enlace">Usuarios</a></li>
                <li><a href="<?php echo constant('URL') ?>paquete" class="navegacion__enlaces--enlace">Paquetes</a></li>
                <li><a href="<?php echo constant('URL') ?>destino" class="navegacion__enlaces--enlace">Destinos</a></li>
                <li><a href="#" class="navegacion__enlaces--enlace">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>