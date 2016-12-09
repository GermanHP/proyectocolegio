@extends('layouts.app4')
@section('content')

    @include('includes.tab_formulario')

        <main class="mdl-layout mdl-color--grey-100">
            <div class="panel panel-heading mdl-color--pink-900 container">

                <img class="img-thumbnail center-block" src="img/indexes/logo.jpg"
                     alt="Generic placeholder image" width="240" height="240">
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="estudiante">

                    <div class="container panel panel-body">
                        <h3>Datos del Estudiante</h3>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Nombres</span>
                            <input type="text" class="form-control" placeholder="Nombres..." aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Apellidos</span>
                            <input type="text" class="form-control" placeholder="Apellidos..." aria-describedby="basic-addon1">
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
                            <label class="radio-inline"><input type="radio" name="estudioP" value="1" checked>Sí</label>
                            <label class="radio-inline"><input type="radio" name="estudioP" value="2" >No</label>
                            <span class="input-group-addon" id="basic-addon1">Repite Grado</span>
                            <label class="radio-inline"><input type="radio" name="repeatG" value="1">Sí</label>
                            <label class="radio-inline"><input type="radio" name="repeatG" value="2" checked>No</label>
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Dirección de Residencia del Estudiante</span>
                            <input type="text" class="form-control" placeholder="Dirección" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Padece Alguna Enfermedad: </span>
                            <label class="radio-inline"><input type="radio" name="optradio" value="1">Sí</label>
                            <label class="radio-inline"><input type="radio" name="optradio" value="2" checked>No</label>
                            <span class="input-group-addon" id="basic-addon1">Nombre de la Enfermedad</span>
                            <input type="text" class="form-control" placeholder="Nombre de la enfermedad" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">¿Posee Tratamiento Médico o Medícamentos?</span>
                            <input type="text" class="form-control" placeholder="Describa tratamiento o medicamento" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1">EL/LA ESTUDIANTE SE RETIRA DE LA INSTITUCIÓN A LA HORA
                    DE SALIDA: </span>
                            <label class="radio-inline"><input type="radio" name="salida">Solo</label>
                            <label class="radio-inline"><input type="radio" name="salida" checked>Acompañado</label>
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
                            <input class="form-control" type="text" pattern="[0-9]{8}"  placeholder="000000000" maxlength="8">
                        </div>
                        <a href="#padre" aria-controls="profile" role="tab" data-toggle="tab">
                            <button class="btn btn-primary">Siguiente</button></a>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="padre">
                    <div class="container panel panel-body">
                        <h3>Datos del Padre</h3>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Nombres</span>
                            <input type="text" class="form-control" placeholder="Nombres" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Apellidos</span>
                            <input type="text" class="form-control" placeholder="Apellidos..." aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
                            <input class="form-control" type="text" pattern="[0-9]{9}"  placeholder="0000000000" maxlength="9">
                            <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
                            <input type="date">
                            <span class="input-group-addon" id="basic-addon1">Profesión u Oficio</span>
                            <input type="text" class="form-control" placeholder="Profesión u Oficio" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Lugar de Trabajo</span>
                            <input type="text" class="form-control" placeholder="Lugar de trabajo" aria-describedby="basic-addon1">
                            <span class="input-group-addon" id="basic-addon1">Teléfono</span>
                            <input class="form-control" type="text" pattern="[0-9]{8}"  placeholder="000000000" maxlength="8">

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
                        <h3>Datos de la Madre</h3>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Nombres</span>
                            <input type="text" class="form-control" placeholder="Nombres" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Apellidos</span>
                            <input type="text" class="form-control" placeholder="Apellidos..." aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
                            <input class="form-control" type="text" pattern="[0-9]{9}"  placeholder="0000000000" maxlength="9">
                            <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
                            <input type="date">
                            <span class="input-group-addon" id="basic-addon1">Profesión u Oficio</span>
                            <input type="text" class="form-control" placeholder="Profesión u Oficio" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Lugar de Trabajo</span>
                            <input type="text" class="form-control" placeholder="Lugar de trabajo" aria-describedby="basic-addon1">
                            <span class="input-group-addon" id="basic-addon1">Teléfono</span>
                            <input class="form-control" type="text" pattern="[0-9]{8}"  placeholder="000000000" maxlength="8">
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
                        <h3>Datos del Responsable</h3>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Nombres</span>
                            <input type="text" class="form-control" placeholder="Nombres" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Apellidos</span>
                            <input type="text" class="form-control" placeholder="Apellidos..." aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
                            <input class="form-control" type="text" pattern="[0-9]{9}"  placeholder="0000000000" maxlength="9">
                            <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
                            <input type="date">
                            <span class="input-group-addon" id="basic-addon1">Profesión u Oficio</span>
                            <input type="text" class="form-control" placeholder="Profesión u Oficio" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1">Lugar de Trabajo</span>
                            <input type="text" class="form-control" placeholder="Lugar de trabajo" aria-describedby="basic-addon1">
                            <span class="input-group-addon" id="basic-addon1">Teléfono</span>
                            <input class="form-control" type="text" pattern="[0-9]{8}"  placeholder="000000000" maxlength="8">
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

                        <a href="#estudiante" aria-controls="profile" role="tab" data-toggle="tab">
                            <button class="btn btn-danger">Atrás</button></a>
                        <a href="#otros" aria-controls="profile" role="tab" data-toggle="tab">
                            <button class="btn btn-primary">Siguiente</button></a>

                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="otros">
                    <div class="container panel panel-body">
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
                        <h3>Estado Civíl de los Padres o Responsables</h3>
                        <div class="input-group form-group">
                            <label class="radio-inline"><input type="radio" name="estadoCivil" value="1">Soltero</label>
                            <label class="radio-inline"><input type="radio" name="estadoCivil" value="2" checked>Casado</label>
                            <label class="radio-inline"><input type="radio" name="estadoCivil" value="3">Acompañados</label>
                            <label class="radio-inline"><input type="radio" name="estadoCivil" value="4">Divorciados</label>
                            <label class="radio-inline"><input type="radio" name="estadoCivil" value="5">Viudo/a</label>
                        </div>
                        <a href="#padre" aria-controls="profile" role="tab" data-toggle="tab">
                            <button class="btn btn-danger">Atrás</button></a>
                        <a href="#" >
                            <button class="btn btn-primary">Inscribir</button></a>
                    </div>
                </div>
            </div>
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