<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Colegio San Juan Bautista</title>
    <!--Styles-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons" >

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">

    <link rel="stylesheet" href="css/material.min.css">
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
            <nav class="mdl-navigation ">
                <a class="mdl-navigation__link" href="{{ url('/') }}">Inicio</a>
                <a class="mdl-navigation__link" href="{{ url('/instalaciones') }}">Instalaciones</a>
                <a class="mdl-navigation__link" data-toggle="modal" data-target="#myModal" href="#">Comentarios</a>
                <a class="mdl-navigation__link" data-toggle="modal" data-target="#modalContacto" href="#">Contáctanos</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">San Juan Bautista</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="{{ url('/') }}">Inicio</a>
            <a class="mdl-navigation__link" href="{{ url('/instalaciones') }}">Instalaciones</a>
            <a class="mdl-navigation__link" href="#">Propuesta 2017</a>
        </nav>
    </div>
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
        <div class="mdl-mega-footer__drop-down-section bgcol">
            @include('includes.footer')
        </div>
    </main>
</div>

<!-- Modal Comentarios-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Comentarios</h4>
            </div>
            <div class="modal-body">
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Comentario</span>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Contacto-->
<div class="modal fade" id="modalContacto" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 class="modal-title"><i class="material-icons">mail</i>Correo electrónico.</h4>
                <p class="list-group-item-text">sanjuanbautistacoleg@gmail.com</p>
                <hr class="divider">
                <h4 class="modal-title"><i class="material-icons">call</i>Teléfono</h4>
                <p class="list-group-item-text">2330-6336</p>
                <hr class="divider">
                <h4 class="modal-title"><i class="material-icons">place</i>Dirección</h4>
                <p class="list-group-item-text">Avenida San José, barrio el centro, Olocuilta.</p>
                <hr class="divider">
                <h4 class="modal-title"><i class="icon-facebook"></i>Facebook</h4>
                <a href="https://www.facebook.com/colegioSJBOficial"><p class="list-group-item-text">
                        https://www.facebook.com/colegioSJBOficial</p></a>
                <hr class="divider">
                <h4 class="modal-title"><i class="icon-twitter"></i>Twitter</h4>
                <a href="https://www.twitter.com/colegioSJBSV"><p class="list-group-item-text">
                        https://www.twitter.com/colegioSJBSV</p></a>
                <hr class="divider">
                <h4 class="modal-title"><i class="icon-youtube"></i>You Tube</h4>
                <a href="https://www.youtube.com/channel/UCkWI9SYJt2y8AtTgrtcLJqQ"><p class="list-group-item-text">
                        https://www.youtube.com/channel/UCkWI9SYJt2y8AtTgrtcLJqQ</p></a>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>

</body>
</html>