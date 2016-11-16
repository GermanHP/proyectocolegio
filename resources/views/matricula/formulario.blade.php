@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading mdl-color--pink-900">

            <img class="img-thumbnail center-block" src="img/indexes/logo.jpg"
                 alt="Generic placeholder image" width="240" height="240">

            <h3 class="text-center">Colegio San Juan Bautista</h3>
            <h3 class="text-center">C&oacute;digo de Infraest. 20860</h3>
            <h3 class="text-center">Olocuilta, La Paz</h3>
            <h2 class="text-center">Ficha de Matrícula, Año Escolar 2017</h2>
        </div>
        <hr class="divider">
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
                <label class="radio-inline"><input type="radio" name="estudioP">Sí</label>
                <label class="radio-inline"><input type="radio" name="estudioP">No</label>
                <span class="input-group-addon" id="basic-addon1">Repite Grado</span>
                <label class="radio-inline"><input type="radio" name="repeatG">Sí</label>
                <label class="radio-inline"><input type="radio" name="repeatG">No</label>
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
            <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1">EL/LA ESTUDIANTE SE RETIRA DE LA INSTITUCIÓN A LA HORA
                    DE SALIDA: </span>
                <label class="radio-inline"><input type="radio" name="salida">Solo</label>
                <label class="radio-inline"><input type="radio" name="salida">Acompañado</label>
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

            <hr class="divider">
            <h3>Datos de la Madre</h3>

            <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1">Nombre del Padre</span>
                <input type="text" class="form-control" placeholder="Nombre Completo" aria-describedby="basic-addon1">
            </div>
            <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
                <input type="number" placeholder="000000000"  maxlength="9">
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
            <h3>Estado Civíl de los Padres o Responsables</h3>
            <div class="input-group form-group">
                <label class="radio-inline"><input type="radio" name="estadoCivil">Soltero</label>
                <label class="radio-inline"><input type="radio" name="estadoCivil">Casado</label>
                <label class="radio-inline"><input type="radio" name="estadoCivil">Acompañados</label>
                <label class="radio-inline"><input type="radio" name="estadoCivil">Divorciados</label>
                <label class="radio-inline"><input type="radio" name="estadoCivil">Viudo/a</label>
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

            <button type="button" id="myButton" data-loading-text="Enviando..." class="btn btn-primary btn-lg btn-align" autocomplete="off">
                Realizar Inscripción
            </button>
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
@endsection()