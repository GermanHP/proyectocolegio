@extends('layouts.app')

@section('content')
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
            <div class="item active">
                <img id="slider" class="first-slide" src="img/slider/slide4.jpg" alt="First slide">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img id="slider" class="size" src="img/indexes/inicio.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img id="slider" class="size" src="img/danza/danza.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img id="slider" class="size" src="img/slider/slide2.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img id="slider" class="size" src="img/slider/slide3.jpg" alt="...">
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
    <aside class="col-md-4">
        <h4>Noticias SJB</h4>
        <a href="#" data-toggle="modal" data-target="#modalNoticia1" class="list-group-item">
            <h4 class="list-group-item-heading">Inicio de matrícula</h4>
            <p class="list-group-item-text">Ya está abierta la matícula para el año escolar 2017.</p>
        </a>
        <a href="#"  data-toggle="modal" data-target="#modalNoticia2" class="list-group-item">
            <h4 class="list-group-item-heading">Conoce nuestro sitio web</h4>
            <p class="list-group-item-text">De la mano con la excelencia, la tecnología ahora está con nosotros.</p>
        </a>
        <a href="#"  data-toggle="modal" data-target="#modalNoticia3" class="list-group-item">
            <h4 class="list-group-item-heading">Ceremonia de Graduación.</h4>
            <p class="list-group-item-text">Ceremonia de graduación para alumnos de preparatoria y noveno grado.</p>
        </a>
        <a href="#"  data-toggle="modal" data-target="#modalNoticia4" class="list-group-item">
            <h4 class="list-group-item-heading">Clausura del año escolar 2016</h4>
            <p class="list-group-item-text">Para parvularia miércoles 16 de noviembre, hora 8:00 am. Para primero,
                segundo y tercer ciclo, martes 22 de noviembre, hora 8:00 am.</p>
        </a>
    </aside>

    <div class="row container margin-cont">
        <div class="col-lg-4 list-group-item container2">
            <img class="img-circle" src="img/aulavirtual.png"
                 alt="Generic placeholder image" width="140" height="140">
            <h2>Aula Virtual</h2>
            <p>Cómo parte de la innovación y la excelencia académica que nos caracteriza, ofrecemos nuestra Aula
                virtual, que es el espacio en donde los miembros de la comunidad educativa pueden obtener acceso a
                materiales, trabajos, eventos y toda información institucional  referente al grado y sección en el que
                se ha matriculado.</p>
            <p><a class="btn btn-primary" href="{{ url('/login') }}" role="button">Ingresar</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4 list-group-item container2">
            <img class="img-circle" src="img/matricula.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Matrícula</h2>
            <p>Es el espacio en el que se registra toda la información  del estudiante y de sus responsables, y que le
                acredita en la matrícula oficial de nuestra institución.</p>
            <p><a class="btn btn-primary" href="{{ url('/inscripcion') }}" role="button">Ingresar</a></p>
        </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->
    </div>
    <!-- features -->

    <div class="container" id="features">
        <div class="row">
            <a href="{{ url('/teacher_profile') }}" class="mdl-navigation__link">
            <div class="col-md-4 feature">
                <i class="material-icons">group</i>
                <h3>Personal Docente</h3>
                <div class="title_border"></div>
                <p>Personal docente  calificado y debidamente acreditado por el MINED imparte las clases a nuestros
                    estudiantes, asegurando así, la máxima calidad de aprendizaje.</p>
            </div>

            </a>
            <a href="{{ url('/historia') }}" class="mdl-navigation__link">
            <div class="col-md-4 feature">
                <i class="material-icons">thumb_up</i>
                <h3>Conócenos</h3>
                <div class="title_border"></div>
                <p>Conóce nuestra historia, todo un legado en educación con excelencia, logros
                    y avances que nos destacan por mucho como una institución de avanzada.</p>
            </div>
            </a>

            <a href="{{url('/propuesta')}}" class="mdl-navigation__link">
                <div class="col-md-4 feature">
                    <i class="material-icons">new_releases</i>
                    <h3>Propuesta 2017</h3>
                    <div class="title_border"></div>
                    <p>En este apartado podrás encontrar toda la información que necesites sobre nuestra propuesta
                        escolar para el año 2017. ¡Anímate a la excelencia!</p>
                </div>
            </a>
        </div>
    </div>

    <div class="center-map container list-group-item">
        <h2>Ubicación Colegio San Juan Bautista</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.4537066065122!2d-89.11974768561723!3d13.569069390465966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6335143ad7b0ef%3A0x7a1250432086b07f!2sColegio+San+Juan+Bautista!5e0!3m2!1ses!2ses!4v1475113455948" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>



    @include('includes.social_bar')
@endsection

