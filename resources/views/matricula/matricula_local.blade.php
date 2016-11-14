@extends('layouts.app4')
@section('content')
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

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
                <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                           role="presentation">description</i>Registro de Matrículas</a>
                <a class="mdl-navigation__link" href="{{ url('/') }}"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                         role="presentation">input</i>Página Principal</a>
            </nav>
        </div>
        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="panel-body">
                <h3>Datos del Estudiante</h3>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Nombre del Estudiante</span>
                    <input type="text" class="form-control" placeholder="Nombre del estudiante..." aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Lugar de Nacimiento</span>
                    <input type="text" class="form-control" placeholder="Lugar de Nacimiento" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
                    <input type="date" class="form-control" >
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Grado que Estudiará</span>
                    <input type="text" class="form-control" placeholder="Primer Grado" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Sacramentos: </span>
                    <span class="input-group-addon" id="basic-addon1">Bautismo</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Primera Comunión</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Confirma</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Ninguno</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Estudió Parvularia</span>
                    <input type="text" class="form-control" placeholder="Si/No" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Repite Grado</span>
                    <input type="text" class="form-control" placeholder="Si/No" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Dirección de Residencia del Estudiante</span>
                    <input type="text" class="form-control" placeholder="Dirección" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Padece Alguna Enfermedad: </span>
                    <label class="radio-inline"><input type="radio" name="optradio">Sí</label>
                    <label class="radio-inline"><input type="radio" name="optradio">No</label>
                    <span class="input-group-addon" id="basic-addon1">Nombre de la Enfermedad</span>
                    <input type="text" class="form-control" placeholder="Nombre de la enfermedad" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">¿Posee Tratamiento Médico o Medícamentos?</span>
                    <input type="text" class="form-control" placeholder="Describa tratamiento o medicamento" aria-describedby="basic-addon1">
                </div>

                <hr class="divider">
                <h3>Datos del Padre</h3>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Nombre del Padre</span>
                    <input type="text" class="form-control" placeholder="Nombre Completo" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
                    <input type="number" placeholder="000000000"  maxlength="9">
                    <span class="input-group-addon" id="basic-addon1">Edad</span>
                    <input type="number" placeholder="00" maxlength="9">
                    <span class="input-group-addon" id="basic-addon1">Profesión u Oficio</span>
                    <input type="text" class="form-control" placeholder="Profesión u Oficio" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Lugar de Trabajo</span>
                    <input type="text" class="form-control" placeholder="Lugar de trabajo" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Teléfono</span>
                    <input type="number" placeholder="00" maxlength="9">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Dirección del trabajo</span>
                    <input type="text" class="form-control" placeholder="Dirección" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Sacramentos Recibidos: </span>
                    <span class="input-group-addon" id="basic-addon1">Bautismo</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Primera Comunión</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Confirma</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Matrimonio</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Ninguno</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                </div>

                <hr class="divider">
                <h3>Datos del Padre</h3>

                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Nombre del Padre</span>
                    <input type="text" class="form-control" placeholder="Nombre Completo" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
                    <input type="number" placeholder="000000000"  maxlength="9">
                    <span class="input-group-addon" id="basic-addon1">Edad</span>
                    <input type="number" placeholder="00" maxlength="9">
                    <span class="input-group-addon" id="basic-addon1">Profesión u Oficio</span>
                    <input type="text" class="form-control" placeholder="Profesión u Oficio" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Lugar de Trabajo</span>
                    <input type="text" class="form-control" placeholder="Lugar de trabajo" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Teléfono</span>
                    <input type="number" placeholder="00" maxlength="9">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Dirección del trabajo</span>
                    <input type="text" class="form-control" placeholder="Dirección" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Sacramentos Recibidos: </span>
                    <span class="input-group-addon" id="basic-addon1">Bautismo</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Primera Comunión</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Confirma</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Matrimonio</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Ninguno</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                </div>

                <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1">EL/LA ESTUDIANTE SE RETIRA DE LA INSTITUCIÓN A LA HORA
                    DE SALIDA: </span>
                    <span class="input-group-addon" id="basic-addon1">Solo</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Acompañado</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Nombre de la Persona Autorizada:</span>
                    <input type="text" class="form-control" placeholder="Nombre completo" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">En caso de emergencia comunicarse con</span>
                    <input type="text" class="form-control" placeholder="Nombre completo" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Dirección:</span>
                    <input type="text" class="form-control" placeholder="Dirección" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Teléfono</span>
                    <input type="number" placeholder="00" maxlength="9">
                </div>
                <h3>Estado Civíl de los Padres o Responsables</h3>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Solteros</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Casados</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Acompañados</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Divorciados</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Viudo</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                </div>
                <hr class="divider">
                <h3>Historial Escolar del Estudiante</h3>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Último Grado Cursado</span>
                    <input type="text" class="form-control" placeholder="Primer Grado" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Centro Escolar Donde Cursó</span>
                    <input type="text" class="form-control" placeholder="Nombre del centro escolar" aria-describedby="basic-addon1">
                </div>
                <h3>Documentos Entregados al Formalizar la Matrícula</h3>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Partida de Nacimiento Original</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Certificado de Último Grado Aprobado</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">Fotocopia de los Padres o Responsable</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">2 Fotografías Recientes</span>
                    <input type="checkbox" class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Observaciones</span>
                    <input type="text" class="form-control" placeholder="Observaciones" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Olocuilta, a los</span>
                    <input type="text" class="form-control" placeholder="Cinco/quince/veinticinco" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">días del mes de</span>
                    <input type="text" class="form-control" placeholder="Diciembre/enero/febrero" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1">de dos mil</span>
                    <input type="text" class="form-control" placeholder="Dieciseis/diecisiete" aria-describedby="basic-addon1">
                </div>

                <div class="mdl-textfield--align-right">
                <button data-toggle="modal" data-target="#modalPrueba"  type="button" id="myButton" data-loading-text="Enviando..." class="btn btn-primary btn-lg " autocomplete="off">
                    Realizar Inscripción
                </button>
                <a href="{{url('/registro_matricula')}}"><button  type="button" id="myButton" data-loading-text="Cancelando" class="btn btn-danger btn-lg align" autocomplete="off">
                    Cancelar
                </button></a>
                </div>
            </div>
    </div>
    </div>
    <script>
        $('#myButton').on('click', function () {
            var $btn = $(this).button('loading')
            // lógica
            $btn.button('reset')
        })
    </script>
        </main>
    </div>

    <!-- Modal Noticia 3-->
    <div class="modal fade" id="modalPrueba" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Prueba de matrícula.</h4>
                </div>
                <div class="modal-body">

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
    <script src="$$hosted_libs_prefix$$/$$version$$/material.min.js"></script>
@endsection