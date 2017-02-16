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
    <meta name="keywords" content="educación, olocuilta, san juan, san juan bautista, la paz, el salvador, parroquia,
    parroquia san juan bautista">
    <meta name="description" content="Sitio web del Colegio San Juan Bautista.">
    <meta name="owner" content="Colegio San Juan Bautista">
    <title>Colegio San Juan Bautista</title>
    <!--Styles-->
{!! Html::style('assets/css/bootstrap.css') !!}
<!-- Font Awesome -->
{!! Html::script('http://code.jquery.com/jquery-latest.js') !!}
{!! Html::style('assets/css/font-awesome.css') !!}
{!! Html::style('dist/css/select2.css') !!}
<!-- Ionicons -->

    <!-- DataTables -->
{!! Html::style('assets/plugins/datatables/dataTables.bootstrap.css') !!}
<!-- Theme style -->
{!! Html::style('assets/dist/css/AdminLTE.css') !!}
<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
{!! Html::style('assets/dist/css/skins/_all-skins.css') !!}
<!-- jQuery 2.1.4 -->
{!! Html::script('assets/plugins/jQuery/jQuery-2.1.4.min.js') !!}


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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    {!! Html::script('dist/js/select2.full.js') !!}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">

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
                <a class="mdl-navigation__link" href="{{ url('/') }}">Inicio</a>
                <a class="mdl-navigation__link" href="{{ url('/instalaciones') }}">Instalaciones</a>
                <a class="mdl-navigation__link" href="{{url('/galeria')}}">Galería</a>
            </nav>
        </div>
    </header>

    <div class="mdl-layout__drawer">
        <a class="navbar-brand text-center" href="#">
            <img id="logoCSJB2" src="img/indexes/logo.jpg" alt="">
        </a> <br> <br>
        <span class="mdl-layout-title">San Juan Bautista</span>
        <nav class="mdl-navigation mdl-color-nav">
            <a class="mdl-navigation__link" href="{{ url('/') }}">Inicio</a>
            <a class="mdl-navigation__link" href="{{ url('/instalaciones') }}">Instalaciones</a>
            <a class="mdl-navigation__link" href="{{url('/galeria')}}">Galería</a>
        </nav>

        <hr class="featurette-divider">
    </div>

    <main class="mdl-layout__content">
        <div class="page-content">
            @yield('content')

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