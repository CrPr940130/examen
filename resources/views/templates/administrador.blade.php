<?php session_start()   ?>
<!DOCTYPE html>
<html>
    <head>
        <?php $route = Route::current()->uri(); ?>
        @if($route == 'administrador') <?php $route='Bienvenido '.session()->get('administrador')->nombre ?> @endif
        @if($route == 'administrador/RegistroMascota') <?php $route='Registrar Mascota' ?> @endif
        @if($route == 'administrador/detalle/{id}') <?php $route='Detalles sobre Mascota' ?> @endif

        <title> {{ $route }}</title>
        <link rel="stylesheet" href="/css/materialize.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
@yield('content')
        <script src="/js/jquery-2.2.1.min.js"></script>
        <script src="/js/materialize.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
