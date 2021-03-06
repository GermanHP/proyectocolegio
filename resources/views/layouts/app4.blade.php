<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Colegio San Juan Bautista</title>
    <!--Styles-->
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="img/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
{!! Html::style('assets/css/bootstrap.css') !!}
<!-- Font Awesome -->

{!! Html::style('assets/css/font-awesome.css') !!}
{!! Html::style('dist/css/select2.css') !!}
<!-- Ionicons -->
{!! Html::script('http://code.jquery.com/jquery-latest.js') !!}
    <!-- DataTables -->
{!! Html::style('assets/plugins/datatables/dataTables.bootstrap.css') !!}
<!-- Theme style -->
{!! Html::style('assets/dist/css/AdminLTE.css') !!}
<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
{!! Html::style('assets/dist/css/skins/_all-skins.css') !!}
<!-- jQuery 2.1.4 -->
{!! Html::script('assets/plugins/jQuery/jQuery-2.1.4.min.js') !!}

{!! Html::script('dist/js/select2.full.js') !!}
<!-- Bootstrap 3.3.5 -->
{!! Html::script('assets/js/bootstrap.min.js') !!}
<!-- DataTables -->
{!! Html::script('assets/plugins/datatables/jquery.dataTables.min.js') !!}
{!! Html::script('assets/plugins/datatables/dataTables.bootstrap.min.js') !!}
<!-- SlimScroll -->
{!! Html::script('assets/plugins/slimScroll/jquery.slimscroll.min.js') !!}
<!-- FastClick -->
{!! Html::script('assets/plugins/fastclick/fastclick.min.js') !!}
<!-- AdminLTE App -->
{!! Html::script('assets/dist/js/app.min.js') !!}
<!-- AdminLTE for demo purposes -->
    {!! Html::script('assets/dist/js/demo.js') !!}

    {!! Html::script('assets/plugins/datepicker/bootstrap-datepicker.js') !!}

    {!! Html::script('assets/plugins/timepicker/bootstrap-timepicker.min.js') !!}
    {!! Html::script('assets/plugins/datepicker/locales/bootstrap-datepicker.es.js') !!}
    {!! Html::script('assets/js/jquery.mask.min.js') !!}

    {!! Html::style('assets/plugins/datepicker/datepicker3.css') !!}
    {!! Html::script('assets/js/loading.js') !!}
    {!! Html::script('assets/js/SERO.js') !!}
    {!! Html::style('assets/css/SERO.css') !!}
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


    {!! Html::style('css/dash.css') !!}
    {!! Html::style('$$hosted_libs_prefix$$/$$version$$/material.cyan-light_blue.min.css') !!}
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons" >

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">

    {!! Html::style('css/material.min.css') !!}
    {!! Html::style('css/main.css') !!}
    {!! Html::style('css/appblade.css') !!}
    {!! Html::script('js/material.min.js') !!}


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
                <a class="mdl-navigation__link" href="{{ url('/registro_matricula') }}">Inicio</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">San Juan Bautista</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="{{url('/registro_matricula')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                     role="presentation">home</i>Inicio</a>
            <a class="mdl-navigation__link" href="{{url('/nueva')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                        role="presentation">note_add</i>Nueva Matrícula</a>
            <a class="mdl-navigation__link" href="{{url('/registro')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                        role="presentation">description</i>Registro de Matrículas</a>
            <a class="mdl-navigation__link" href="{{ url('/listado_padres') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                     role="presentation">supervisor_account</i>Listado de Padres</a>
            <a class="mdl-navigation__link" href="{{url('/noticias')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                           role="presentation">create</i>Sección Noticias</a>
            <a class="mdl-navigation__link" href="{{ url('/') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                     role="presentation">input</i>Página Principal</a>
        </nav>

        <hr class="featurette-divider">
    </div>
    <main class="mdl-layout__content">
        <div class="page-content">
        @yield('content')

        <!--Scripts-->
            <!-- Scripts -->
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