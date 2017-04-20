<!DOCTYPE html>
<html>
<head>
    <script src="https://www.gstatic.com/firebasejs/3.6.9/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyBiDpBhiGaDw9YqZEVFRvstk7R7jWfZm10",
            authDomain: "colegiosjbandroid.firebaseapp.com",
            databaseURL: "https://colegiosjbandroid.firebaseio.com",
            storageBucket: "colegiosjbandroid.appspot.com",
            messagingSenderId: "172737940284"
        };
        firebase.initializeApp(config);
    </script>
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
            <a class="navbar-brand" href="#">
                <img id="logoCSJB" src="img/logonav.jpg" alt="">
            </a>
            <span class="mdl-layout-title">Colegio San Juan Bautista</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation ">
                <a class="mdl-navigation__link" href="{{ url('/Redireccionador') }}">Inicio</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <a class="navbar-brand text-center" href="#">
            <img id="logoCSJB2" src="img/indexes/logo.jpg" alt="">
        </a> <br> <br>
        <span class="mdl-layout-title">San Juan Bautista</span>
        <nav class="mdl-navigation mdl-color-nav">
            @if(Auth::user()->idTipousuario==5)
                <a class="mdl-navigation__link" href="{{url('/Redireccionador')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                         role="presentation">home</i>Inicio</a>
                <a class="mdl-navigation__link" href="{{url('/BloquearUsuarios')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                         role="presentation">supervisor_account</i>Bloquear Usuarios</a>
                <a class="mdl-navigation__link" href="{{url('/formulario')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                 role="presentation">note_add</i>Nueva Matrícula</a>
                <a class="mdl-navigation__link" href="{{url('/registro')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                               role="presentation">description</i>Registro de Matrículas</a>
                <a class="mdl-navigation__link" href="{{ url('/listado_padres') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                       role="presentation">supervisor_account</i>Listado de Padres</a>
                <a class="mdl-navigation__link" href="{{ url('/GradosActivos') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                      role="presentation">supervisor_account</i>Listado de Grados</a>
                <a class="mdl-navigation__link" href="{{ url('/Materias') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                 role="presentation">supervisor_account</i>Listado de Materias</a>
                <a class="mdl-navigation__link" href="{{ url('/MostrarMaestros') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                        role="presentation">supervisor_account</i>Listado de Maestros</a>
                <a class="mdl-navigation__link" href="{{url('/NuevaMateria')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                   role="presentation">create</i>Nueva Materia</a>
                <a class="mdl-navigation__link" href="{{url('/MaestroGrado')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                   role="presentation">create</i>Maestro Resposable</a>
                @endif


                @if(Auth::user()->idTipousuario==3)

                    <a class="mdl-navigation__link" href="{{url('/MisMaterias')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                      role="presentation">home</i>Inicio</a>
                    <a class="mdl-navigation__link" href="{{url('/formulario')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                     role="presentation">note_add</i>Nueva Matrícula</a>
                    <a class="mdl-navigation__link" href="{{url('/registro')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                   role="presentation">description</i>Registro de Matrículas</a>
                    <a class="mdl-navigation__link" href="{{ url('/listado_padres') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                           role="presentation">supervisor_account</i>Listado de Padres</a>
                    <a class="mdl-navigation__link" href="{{url('/noticias')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                   role="presentation">create</i>Sección Noticias</a>
                @endif
                @if(Auth::user()->id==18)
                    <a class="mdl-navigation__link" href="{{url('/Redireccionador')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                             role="presentation">home</i>Inicio</a>
                    <a class="mdl-navigation__link" href="{{url('/BloquearUsuarios')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                           role="presentation">supervisor_account</i>Bloquear Usuarios</a>
                    <a class="mdl-navigation__link" href="{{url('/formulario')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                     role="presentation">note_add</i>Nueva Matrícula</a>
                    <a class="mdl-navigation__link" href="{{url('/registro')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                   role="presentation">description</i>Registro de Matrículas</a>
                    <a class="mdl-navigation__link" href="{{ url('/listado_padres') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                           role="presentation">supervisor_account</i>Listado de Padres</a>
                    <a class="mdl-navigation__link" href="{{ url('/GradosActivos') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                          role="presentation">supervisor_account</i>Listado de Grados</a>
                    <a class="mdl-navigation__link" href="{{ url('/Materias') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                     role="presentation">supervisor_account</i>Listado de Materias</a>
                    <a class="mdl-navigation__link" href="{{ url('/MostrarMaestros') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                            role="presentation">supervisor_account</i>Listado de Maestros</a>
                    <a class="mdl-navigation__link" href="{{url('/NuevaMateria')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                       role="presentation">create</i>Nueva Materia</a>
                    <a class="mdl-navigation__link" href="{{url('/MaestroGrado')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                       role="presentation">create</i>Maestro Resposable</a>

                    @endif
                <a class="mdl-navigation__link" href="{{url('/GradosBoleta')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                                   role="presentation">create</i>Boletas</a>
                <form action="https://moodle.colegiosjb.net/login/index.php" id="login" method="post">
                    <input class="input"  style="display:none" id="username" name="username" type="text" value="{{Auth::user()->usuarioMoodle}}" />
                    <input class="input"  style="display:none" id="password" name="password" type="password" value="{{Auth::user()->passwordMoodle}}" />
                    {!!Form::submit('Moodle Virtual', ['class'=>'mdl-navigation__link','name'=>'btnMoodle'])!!}
                </form>
            <a class="mdl-navigation__link" href="{{url('/CambiarPassword')}}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                     role="presentation">input</i>Cambiar Contraseña</a>
                <a class="mdl-navigation__link" href="../logout"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                     role="presentation">input</i>Cerrar Sesión</a>
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
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-79806968-3', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>