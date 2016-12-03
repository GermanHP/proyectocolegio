<script>
    $(function () {

        $("#department").select2();
        $("#municipio").select2();
        $("#gradoCombo").select2();
        $('#dui').mask('000000000');
        $('#nit').mask('00000000000000');
        //$.fn.datepicker.defaults.language = 'es';
        $('#datepicker').datepicker({
            pickTime: false,
            autoclose: true,
            language: 'es',
            cursor: 'pointer',
            maxDate: '-18Y',
            minDate: '-100Y',
            yearRange: '-100'
        });


        $('#department').prepend('<option val="" disabled selected>Seleccione un departamento</option>')
    });
    function charge() {
        waitingDialog.show('Procesando... ', {progressType: 'info'})
    }
    function stop() {
        waitingDialog.hide();
    }
    function GetMunicipios(dep) {
        //FUNCION QUE DESPLIEGA LA ANIMACIÓN DE CARGANDO
        this.charge();
        $('#municipio').find('option').remove();
        //ELIMINANDO MUNICIPIOS DEL SELECT
        $('#divmun').removeClass('add-Active');
        $('#divmun').addClass('add-Innactive');
        $.ajax({
            // la URL para la petición
            url: '{{route('getMun')}}',
            // la información a enviar
            // (también es posible utilizar una cadena de datos)
            data: {_token: $('input[name=_token]').val(), id: dep.value},
            // especifica si será una petición POST o GET
            type: 'POST',
            // el tipo de información que se espera de respuesta
            dataType: 'json',
            // código a ejecutar si la petición es satisfactoria;
            // la respuesta es pasada como argumento a la función
            success: function (json, textStatus, xhr) {
                waitingDialog.hide();
                console.log('status ' + xhr.status);
                $('#divmun').removeClass('add-Innactive');
                $('#divmun').addClass('add-Active');
                json.forEach(function (entry) {
                    $("#municipio").append('<option value="' + entry.id + '">' + entry.nombre + '</option>');
                });
            },
            // código a ejecutar si la petición falla;
            // son pasados como argumentos a la función
            // el objeto de la petición en crudo y código de estatus de la petición
            error: function (xhr, status) {
                waitingDialog.hide();
                //  this.stop();
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status, json) {
                waitingDialog.hide();
                if (xhr.status == 450) {
                    var response = JSON.parse(xhr.responseText);
                    $('#modalbody').text(response.error);
                    $('#modal').modal('show');
                }
            }
        });
    }
</script>
<div id="ingreso">
<h3>Datos del Estudiante</h3>
<div class="input-group form-group">
    <span class="input-group-addon" id="basic-addon1">Nombres</span>
    <input name ="nombreEstudiante" id="nombreEstudiante" type="text" class="form-control" placeholder="Nombres..." aria-describedby="basic-addon1">
</div>
<div class="input-group form-group">
    <span class="input-group-addon" id="basic-addon1">Apellidos</span>
    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellidos..." aria-describedby="basic-addon1">
</div>
<div class="input-group form-group">
    <span class="input-group-addon" id="basic-addon1">Lugar de Nacimiento</span>

    <input type="text" name="lugarNacimiento" class="form-control" placeholder="Lugar de Nacimiento" aria-describedby="basic-addon1">
</div>
    <div class="form-group">
        {{ Form::label('Departamento',null,['class'=>'input-group-addon']) }} {!! Form::select('departamento',$departamentos,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'department', 'onchange'=>'GetMunicipios(this)', 'style'=>'width: 100%']) !!}
    </div>

    <div id="divmun" class="form-group" style="display: none;">
        {{ Form::label('Municipio',null,['class'=>'input-group-addon']) }}
        <select id="municipio" name="municipio" class="form-control js-example-basic-single2"
                style="width: 100%">

        </select>

    </div>
<div class="input-group form-group">
    <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
    <input type="date" name="fechaNacimientoEstudiante" class="form-control" >
</div>
<div class="input-group form-group">
    <span class="input-group-addon" id="basic-addon1">Grado que Estudiará</span>
    {!! Form::select('gradoNuevo',$grados,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
</div>
<div class="input-group form-group">
    <span class="input-group-addon" id="basic-addon1">Sacramentos: </span>
    <span class="input-group-addon" id="basic-addon1">Bautismo</span>
    <input type="checkbox" name="sacramentosEstudiante[]" value="1" aria-describedby="basic-addon1">
    <span class="input-group-addon" id="basic-addon1">Primera Comunión</span>
    <input type="checkbox" name="sacramentosEstudiante[]" value="2" aria-describedby="basic-addon1">
    <span class="input-group-addon" id="basic-addon1">Confirma</span>
    <input type="checkbox"  name="sacramentosEstudiante[]" value="3" aria-describedby="basic-addon1">
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
<div id="add_estudiante">

</div>

<a href="#padre" aria-controls="profile" role="tab" data-toggle="tab">
    <button class="btn btn-primary">Siguiente</button></a>

</div>
</div>
</div>

