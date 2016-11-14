<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="educación, olocuilta, san juan, san juan bautista, la paz, el salvador, parroquia,
    parroquia san juan bautista">
    <meta name="description" content="Sitio web del Colegio San Juan Bautista.">
    <meta name="owner" content="Colegio San Juan Bautista">
    <title>Colegio San Juan Bautista</title>
    <!--Styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">

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
                <a class="mdl-navigation__link" href="#">Actividades</a>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle mdl-navigation__link" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Servicios<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Cuadro de honor</a></li>
                        <li><a data-toggle="modal" data-target="#myModal" href="#">Comentarios</a></li>
                        <li><a href="#">Encuesta</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a data-toggle="modal" data-target="#modalContacto" href="#">Contáctanos</a></li>
                    </ul>
                </li>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">San Juan Bautista</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="{{ url('/') }}">Inicio</a>
            <a class="mdl-navigation__link" href="{{ url('/instalaciones') }}">Instalaciones</a>
            <a class="mdl-navigation__link" href="#">Actividades</a>
        </nav>

        <hr class="featurette-divider">
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
    </main>

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
                        <span class="input-group-addon" id="basic-addon1">Correo Electrónico</span>
                        <input type="email" name="correo" class="form-control" placeholder="email@email.com" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group form-group">
                        <span class="input-group-addon" id="basic-addon1">Comentario</span>
                        <input type="text" name="comentario" class="form-control" placeholder="Comentario" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Noticia 1-->
    <div class="modal fade" id="modalNoticia1" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Inicio de Matrícula</h4>
                </div>
                <div class="modal-body">
                    <p class="list-group-item-text">Ya está abierta la matícula para el año escolar 2017.</p>

                    <a href="{{url('/propuesta')}}"><img class="size" src="img/propuesta/prospecto1.jpg" height="300" width="532"></a>

                    <hr class="featurette-divider">

                    <a href="{{url('propuesta')}}"><img src="img/propuesta/prospecto2.jpg" height="300" width="532"></a>
                    </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal Noticia 2-->
    <div class="modal fade" id="modalNoticia2" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Conoce Nuestro Sitio Web</h4>
                </div>
                <div class="modal-body">
                    <p class="list-group-item-text">De la mano con la excelencia, la tecnología ahora está con nosotros.
                    </p><br>
                    <p class="list-group-item-text">Aquí encontrarás noticias del acontecer de nuestra institución,
                        además podrás conocer nuestras instalaciones, ver una galería de imágenes y conocer historia
                        sobre nuestra institución.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal Noticia 3-->
    <div class="modal fade" id="modalNoticia3" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ceremonia de graduación.</h4>
                </div>
                <div class="modal-body">
                    <p class="list-group-item-text">Ceremonia de graduación para alumnos de preparatoria y
                        noveno grado.</p><br>
                    <p class="list-group-item-text"></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal Noticia 4-->
    <div class="modal fade" id="modalNoticia4" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Clausura del año escolar 2016.</h4>
                </div>
                <div class="modal-body">
                    <p class="list-group-item-text">Para parvularia miércoles 16 de noviembre, hora 8:00 am. Para primero,
                        segundo y tercer ciclo, martes 22 de noviembre, hora 8:00 am.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

    <div class="mdl-mega-footer__drop-down-sec>
        @include('includes.footer')
    </div>
</div>
</body>
</html>