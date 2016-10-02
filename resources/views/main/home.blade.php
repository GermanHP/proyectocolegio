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
    <aside class="col-md-3 hidden-xs hidden-sm container3">
        <h4>Noticias SJB</h4>
        <a href="" class="list-group-item">
            <h4 class="list-group-item-heading">Inicio de matrícula</h4>
            <p class="list-group-item-text">Matrícula abierta año 2017 a partir del día X.</p>
        </a>
        <a href="" class="list-group-item">
            <h4 class="list-group-item-heading">Conoce nuestro sitio web.</h4>
            <p class="list-group-item-text">De la mano con la excelencia, la tecnología ahora está con nosotros.</p>
        </a>
        <a href="" class="list-group-item">
            <h4 class="list-group-item-heading">Matrícula en Línea</h4>
            <p class="list-group-item-text">Como sello de nuestra calidad, a partir del año 2017 ponemos a disposición
            la matrícula en línea</p>
        </a>
        <a href="" class="list-group-item">
            <h4 class="list-group-item-heading">Concierto navideño.</h4>
            <p class="list-group-item-text">Nuestros docentes y alumnos se unen para deleitar con un concierto de
            música navideña</p>
        </a>
    </aside>

    <div class="row container margin-cont">
        <div class="col-lg-4 list-group-item container2">
            <img class="img-circle" src="img/aulavirtual.png"
                 alt="Generic placeholder image" width="140" height="140">
            <h2>Aula Virtual</h2>
            <p>Cómo parte de la innovación y la excelencia académica que nos caracteriza, ofrecemos el espacio de aula
                virtual, en donde los alumnos pueden obtener acceso a material, trabajos, eventos, que tengan
                que ver con el curso en el que se ha matriculado.</p>
            <p><a class="btn btn-primary" href="{{ url('/login') }}" role="button">Ingresar</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4 list-group-item container2">
            <img class="img-circle" src="img/matricula.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Matrícula</h2>
            <p>La matrícula en línea ofrece una asignación
                de cupo temporal de 24 horas, el cual caduca si en ese período no se efectúan los pagos y aranceles
                estipulados por la institución para hacer válida la matrícula.</p>
            <p><a class="btn btn-primary" href="{{ url('/inscripcion') }}" role="button">Ingresar</a></p>
        </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->
    <!-- features -->

    <div class="container" id="features">
        <div class="row">
            <a href="{{ url('/teacher_profile') }}" class="mdl-navigation__link">
            <div class="col-md-4 feature">
                <i class="material-icons">group</i>
                <h3>Personal Docente</h3>
                <div class="title_border"></div>
                <p>Personal docente altamente calificado imparte las clases a nueestros alumnos asegurando así,
                    la máxima calidad de aprendizaje.</p>
            </div>

            </a>
            <a href="{{ url('/historia') }}" class="mdl-navigation__link">
            <div class="col-md-4 feature">
                <i class="material-icons">thumb_up</i>
                <h3>Conócenos</h3>
                <div class="title_border"></div>
                <p>Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto
                    Texto texto Texto texto Texto texto Texto texto Texto texto Texto.</p>
            </div>
            </a>

            <a href="#" class="mdl-navigation__link">
                <div class="col-md-4 feature">
                    <i class="material-icons">new_releases</i>
                    <h3>Propuesta 2017</h3>
                    <div class="title_border"></div>
                    <p>Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto
                        Texto texto Texto texto Texto texto Texto texto Texto texto Texto.</p>
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

