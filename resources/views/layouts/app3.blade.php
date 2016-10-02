<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Colegio San Juan Bautista</title>
    <!--Styles-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons" >

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">

    <link rel="stylesheet" href="css/material.min.css">
    <link rel='stylesheet' href='css/main.css'>
    <link rel="stylesheet" href="css/appblade.css">
    <script src="js/material.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>

<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Colegio San Juan Bautista</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <a class="mdl-navigation__link" href="{{ url('/dash_teacher') }}">Inicio</a>
                <a class="mdl-navigation__link" href="">Moodle</a>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle mdl-navigation__link" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Servicios<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Cuadro de honor</a></li>
                        <li><a href="#">Comentarios</a></li>
                        <li><a href="#">Encuesta</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Contáctanos</a></li>
                    </ul>
                </li>
            </nav>
        </div>
    </header>
    <main class="mdl-layout__content">
        <div class="page-content">
        @yield('content')

        <!--Scripts-->
            <!-- Scripts -->
            <script src="http://code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
            <script >
                $.material.init();
            </script>
        </div>
    </main>
</div>
</body>
</html>