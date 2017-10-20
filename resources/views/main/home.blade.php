@extends('layouts.app')
@section('content')

    {{Html::style('css/animation.css')}}

    <!--<div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>


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


            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>-->

    <div class="panel panel-body" id="panel-inicio">
        <div class="container">
            <h1 class="text-center white-text inicio-letra"><strong>Colegio San Juan Bautista</strong></h1>
            <img class="center-block" src="img/indexes/logo.jpg" alt="" height="180" width="180">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-center white-text">Visión</h3>
                    <br>
                    <h4 class="text-justify white-text">Ser una institución con altos estándares educativos que forma jóvenes con competencias técnicas,
                        científicas y artísticas, mediante la implementación de metodologías activas, comprometidos con su
                        desarrollo profesional y humano, para que sea un agente transformador de la comunidad y de la
                        sociedad.</h4>
                </div>
                <div class="col-md-6">
                    <h3 class="text-center white-text">Misión</h3>
                    <br>
                    <h4 class="text-justify white-text">Somos una institución educativa católica que propicia en los estudiantes el desarrollo de las
                        competencias que les permitan resolver con éxito los problemas de la vida diaria, fomentando la
                        práctica de valores y generando un ambiente de respeto por la dignidad humana y  la sana
                        convivencia.</h4>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="contenedor-img-1 slide-1">
            <img src="img/principal/background.png" alt="" class="img-responsive-opacity" id="luminaria">
            <div class="mascara">
                <br>
                <div class="textoCentrado">
                    <p class="white-text textoH2Servicio textoServicio aula-letra">Aula</p>
                    <p class="white-text textoH2Servicio textoServicio aula-letra">Virtual</p>

                    @if(Auth::check())
                        <a class="btn btn-info" href="{{ url('/Redireccionador') }}" role="button">Ingresar</a>
                    @else
                        <a class="btn btn-info" href="{{ url('/login') }}" role="button">Ingresar</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div>

        <div class="contenedor-img-2 slide-1-1">
            <img src="img/principal/education.jpg" alt="" class="img-responsive-opacity" id="paletas">
            <div class="mascara-2">
                <br>
                <div class="textoCentrado">
                    <br>
                    <h2  class="center white-text"><strong>Matrícula en Línea</strong></h2>
                    <br>
                    <p><a class="btn btn-info" href="{{ url('/inscripcion') }}" role="button">Ingresar</a></p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="contenedor-img-1 slide-1">
            <img src="img/principal/calendario.jpg" alt="" class="img-responsive-opacity" id="luminaria">
            <div class="mascara">
                <br>
                <div class="textoCentrado">
                    <br>
                    <h2  class="center white-text"><strong>Calendario Anual</strong></h2>
                    <br>
                    <p><a class="btn btn-info" href="{{ url('/calendario') }}" role="button">Ingresar</a></p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <br>
        <div class="panel panel-body">
            <br>
            <div class="row">
                <div class="col-md-6">
                    <img src="img/slider/slide1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h3 class="text-justify">Conóce nuestra historia, todo un legado en educación con excelencia, logros
                        y avances que nos destacan por mucho como una institución de avanzada.</h3>
                    <br>
                    <p><a class="btn btn-info" href="{{ url('/historia') }}" role="button">Saber más</a></p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="section">

                <!--   Icon Section   -->
                <div class="row">
                <!--<div class="col s12 m4 panel panel-body">
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
                    </div>-->

                <!--<div class="col s12 m4 panel panel-body">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">school</i></h2>
                    <h5 class="center">Matrícula.</h5>

                    <p class="light text-justify">Es el espacio en el que se registra toda la información  del estudiante y de sus responsables, y que le
                        acredita en la matrícula oficial de nuestra institución. Además, se presentan los pasos a seguir para
                        poder efectuar la reserva de la matrícula en línea.</p><br><br>
                    <p><a class="btn btn-info" href="{{ url('/inscripcion') }}" role="button">Ingresar</a></p>
                </div>
            </div>-->

                <!--<div class="col s12 m4 panel panel-body">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">date_range</i></h2>
                    <h5 class="center">Calendario Anual.</h5>

                    <p class="light">Aquí encontrarás las actividades a nivel institucional proyectadas para todo el año
                        escolar 2017 por parte de nuestros alumnos y docentes. Estas actividades pueden estar sujetas a cambios
                    que se avisaran con debida anticipación por este medio o por la institución.</p><br><br>
                    <p><a class="btn btn-info" href="{{ url('/calendario') }}" role="button">Ingresar</a></p>
                </div>
            </div>-->
                </div>

            </div>
        </div>

        <div class="panel panel-body">
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-justify">Personal docente  calificado y debidamente acreditado por el MINED imparte
                        las clases a nuestros estudiantes, asegurando así, la máxima calidad de aprendizaje.</h3>
                    <br>
                    <p><a class="btn btn-info" href="{{ url('/teacher_profile') }}" role="button">Conocer</a></p>
                </div>
                <div class="col-md-6">
                    <img src="img/slider/slide1.jpg" alt="" height="150">
                </div>

            </div>
        </div>

        <div class="panel panel-body">
            <br>
            <div class="row">
                <div class="col-md-6">
                    <img class="center-block" src="img/indexes/propuesta.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h3 class="text-justify">En este apartado podrás encontrar toda la información que necesites sobre nuestra propuesta
                        escolar para el año 2018. ¡Anímate a la excelencia!.</h3>
                    <br>
                    <p><a class="btn btn-info" href="{{ url('/propuesta') }}" role="button">Saber más</a></p>
                </div>
            </div>
        </div>


        <div class="valign-wrapper grey darken-4 panel panel-body">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.4537066065122!2d-89.11974768561723!3d13.569069390465966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6335143ad7b0ef%3A0x7a1250432086b07f!2sColegio+San+Juan+Bautista!5e0!3m2!1ses!2ses!4v1475113455948" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <h4>Colegio San Juan Bautista</h4>
                    <div class="col-md-5">
                        <address>
                            Tel. 2330-6336, <br>
                            Avenida San José, barrio el centro, Olocuilta, La Paz, El Salvador.
                        </address>
                    </div>

                </div>
                <div class="bottom-footer">
                    <div class="col-md-5">&copy; Copyright Colegio San Juan Bautista, Olocuilta.</div>
                    <div class="col-md-7">

                        <div class="mdl-mini-footer__right-section panel-content pull-right" id="redes">
                            <a class="btn" href="https://www.facebook.com/ColorSpaceCompany/" target="_blank" id="facebook"><h2><i class="fa fa-facebook-official"></i></h2></a>
                            <a class="btn" href="https://www.instagram.com/colorspaceco/" target="_blank" id="twitter"><h2><i class="fa fa-twitter"></i></h2></a>
                            <a class="btn" href="https://www.youtube.com/channel/UCkWI9SYJt2y8AtTgrtcLJqQ" id="youtube"><h2><i class="fa fa-youtube-play"></i></h2></a>
                            <a class="btn" href="https://play.google.com/store/apps/details?id=com.todociber.colegiosanjuanbautista&rdid=com.todociber.colegiosanjuanbautista" id="android"><h2><i class="fa fa-android"></i></h2></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>

@endsection