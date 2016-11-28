@extends('layouts.app4')
@section('content')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Dashboard para ingreso de data para matricula">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="img/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="img/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="$$hosted_libs_prefix$$/$$version$$/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="css/dash.css">
    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
</head>
<body>
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                    <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search">
                    <label class="mdl-textfield__label" for="search">El query va aquí!!!</label>
                </div>
            </div>
        </div>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
            <img src="img/user.jpg" class="demo-avatar">
            <div class="demo-avatar-dropdown">
                <span>hello@example.com</span>
                <div class="mdl-layout-spacer"></div>
                <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons" role="presentation">arrow_drop_down</i>
                    <span class="visuallyhidden">Accounts</span>
                </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                    <li class="mdl-menu__item">Cerrar Sesión</li>
                </ul>
            </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
            <a class="mdl-navigation__link" href="{{url('/registro_matricula')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">home</i>Inicio</a>
            <a class="mdl-navigation__link" href="{{url('/nueva')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                        role="presentation">note_add</i>Nueva Matrícula</a>
            <a class="mdl-navigation__link" href="{{url('/registro')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                           role="presentation">description</i>Registro de Matrículas</a>
            <a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">create</i>Sección Noticias</a>
            <a class="mdl-navigation__link" href="{{ url('/') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                     role="presentation">input</i>Página Principal</a>
        </nav>
    </div>
    <main class="mdl-layout__content mdl-color--grey-100">
        <div class="container panel panel-body">
        <h3>Nombre de la Noticia</h3>
        <div class="input-group form-group">
            <span class="input-group-addon" id="basic-addon1">Noticia</span>
            <input type="text" class="form-control" placeholder="Nombre de noticia" aria-describedby="basic-addon1">
        </div>
            <h3>Contenido de la noticia</h3>
            <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1">Contenido</span>
                <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
        </div>
    </main>
</div>
<script src="$$hosted_libs_prefix$$/$$version$$/material.min.js"></script>
</body>
</html>
@stop