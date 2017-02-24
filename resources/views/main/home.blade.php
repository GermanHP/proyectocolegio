@extends('layouts.app')
@section('content')

    <!-- CSS  -->
    {!! Html::style('css/materialize.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::script('https://code.jquery.com/jquery-2.1.1.min.js') !!}

    {!! Html::script('js/materialize.js') !!}

    {!! Html::script('js/init.js') !!}

    <div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active panel panel-body">
                    <img id="slider" class="first-slide" src="img/slider/slide1.jpg" alt="First slide">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item panel panel-body">
                    <img id="slider" class="size" src="img/slider/slide2.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item panel panel-body">
                    <img id="slider" class="size" src="img/slider/slide3.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item panel panel-body">
                    <img id="slider" class="size" src="img/slider/slide4.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item panel panel-body">
                    <img id="slider" class="size" src="img/slider/slide5.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4 panel panel-body">
                <div class="icon-block">
                    <h2 class="center-align brown-text"><i class="material-icons">important_devices</i></h2>
                    <h5 class="center">Aula Virtual.</h5>

                    <p class="light text-justify">Cómo parte de la innovación y la excelencia académica que nos caracteriza, ofrecemos nuestra Aula
                        virtual, que es el espacio en donde los miembros de la comunidad educativa pueden obtener acceso a
                        materiales, trabajos, eventos y toda información institucional  referente al grado y sección en el que
                        se ha matriculado.</p>
                    @if(Auth::check())
                        <a class="btn btn-info" href="{{ url('/Redireccionador') }}" role="button">Ingresar</a>
                    @else
                        <a class="btn btn-info" href="{{ url('/login') }}" role="button">Ingresar</a>
                    @endif
                </div>
            </div>

            <div class="col s12 m4 panel panel-body">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">school</i></h2>
                    <h5 class="center">Matrícula.</h5>

                    <p class="light text-justify">Es el espacio en el que se registra toda la información  del estudiante y de sus responsables, y que le
                        acredita en la matrícula oficial de nuestra institución. Además, se presentan los pasos a seguir para
                        poder efectuar la reserva de la matrícula en línea.</p><br><br>
                    <p><a class="btn btn-info" href="{{ url('/inscripcion') }}" role="button">Ingresar</a></p>
                </div>
            </div>

            <div class="col s12 m4 panel panel-body">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">date_range</i></h2>
                    <h5 class="center">Calendario Anual.</h5>

                    <p class="light">Aquí encontrarás las actividades a nivel institucional proyectadas para todo el año
                        escolar 2017 por parte de nuestros alumnos y docentes. Estas actividades pueden estar sujetas a cambios
                    que se avisaran con debida anticipación por este medio o por la institución.</p><br><br>
                    <p><a class="btn btn-info" href="{{ url('/calendario') }}" role="button">Ingresar</a></p>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper" id="nosotros">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">

            </div>
        </div>
    </div>
    <div class="parallax">
        <img id="slider" class="size" src="img/slider/slide3.jpg" alt="...">
    </div>
</div>

<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4 panel panel-body">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">account_box</i></h2>
                    <h4 class="center">Personal Docente</h4>

                    <p class="light text-justify">Personal docente  calificado y debidamente acreditado por el MINED imparte las clases a nuestros
                        estudiantes, asegurando así, la máxima calidad de aprendizaje.</p>
                    <p><a class="btn btn-info" href="{{ url('/teacher_profile') }}" role="button">Conocer</a></p>
                </div>
            </div>

            <div class="col s12 m4 panel panel-body">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">visibility</i></h2>
                    <h4 class="center">Conócenos</h4> <br>

                    <p class="light text-justify">Conóce nuestra historia, todo un legado en educación con excelencia, logros
                        y avances que nos destacan por mucho como una institución de avanzada.</p><br><br>
                    <p><a class="btn btn-info" href="{{ url('/historia') }}" role="button">Saber más</a></p>
                </div>
            </div>

            <div class="col s12 m4 panel panel-body">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">school</i></h2>
                    <h4 class="center">Propuesta 2017</h4> <br>

                    <p class="light text-justify">En este apartado podrás encontrar toda la información que necesites sobre nuestra propuesta
                        escolar para el año 2017. ¡Anímate a la excelencia!.</p><br><br>
                    <p><a class="btn btn-info" href="{{ url('/propuesta') }}" role="button">Saber más</a></p>
                </div>
            </div>
        </div>

    </div>
</div>

    <!-- Barra social -->

    <button href="#barsocial" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored floating">
        +
    </button>

<div class="parallax-container valign-wrapper grey darken-4 container panel panel-body">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.4537066065122!2d-89.11974768561723!3d13.569069390465966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6335143ad7b0ef%3A0x7a1250432086b07f!2sColegio+San+Juan+Bautista!5e0!3m2!1ses!2ses!4v1475113455948" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<footer class="page-footer grey darken-4" id="contacto">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Colegio San Juan Bautista</h5>
                <p class="grey-text text-lighten-4"> Tel. 2330-6336, <br>
                    Avenida San José, barrio el centro, Olocuilta, La Paz, El Salvador.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text center-align">Nuestras Redes</h5>
                <ul class="footer-nav">
                    <li><a href="https://www.facebook.com/colegioSJBOficial" target="_blank"><img src="img/facebook-logo.png" alt="" height="50" width="50"></a></li>
                    <li><a href="https://www.twitter.com/colegioSJBSV" target="_blank" ><img src="img/twitter-logo.png" alt="" height="50" width="50"></a></li>
                    <br><br><br>

                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text center-align">Descarga la App</h5>
                <li><a href="https://play.google.com/store/apps/details?id=com.todociber.colegiosanjuanbautista&rdid=com.todociber.colegiosanjuanbautista" target="_blank"><img
                                src="img/google-play-2.png" alt="" height="100" width="150"></a></li>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy; Copyright Colegio San Juan Bautista, Olocuilta.
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

@endsection