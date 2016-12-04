@include('includes.insert_formulario')
<div id="ingreso">
<h3>Datos del Estudiante</h3>
    <div class="input-group form-group">
        {{Form::label('Nombres',null,['class'=>'input-group-addon'])}}
        {{Form::text('nombre',null, ['class'=>'form-control', 'placeholder'=>'Ingrese los nombres del estudiante'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Apellidos',null,['class'=>'input-group-addon'])}}
        {{Form::text('apellido',null, ['class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del estudiante'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Género',null,['class'=>'input-group-addon'])}}
        <label class="radio-inline">{!! Form::radio('generoEstudiante','1', true) !!}Masculino</label>
        <label class="radio-inline">{!! Form::radio('generoEstudiante','2') !!}Femenino</label>
    </div>
    <div class="input-group form-group">
        {{Form::label('Correo Electrónico',null,['class'=>'input-group-addon'])}}
        {{Form::email('correoEstudiante',null, ['class'=>'form-control', 'placeholder'=>'Ingrese e-mail del estudiante', 'id'=>'correoEstudiante', 'aria-describedby'=>'basic-addon1'])}}
       </div>
    <div class="input-group form-group">
        {{Form::label('Lugar de Nacimiento',null,['class'=>'input-group-addon'])}}
        {{Form::text('lugarNacimiento',null, ['class'=>'form-control', 'placeholder'=>'Lugar de Nacimiento', 'aria-describedby'=>'basic-addon1'])}}
    </div>
    <div class="input-group form-group">
        {{ Form::label('Departamento',null,['class'=>'input-group-addon']) }} {!! Form::select('departamento',$departamentos,9,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'department', 'onchange'=>'GetMunicipios(this)', 'style'=>'width: 100%']) !!}
    </div>
    <div id="divmunVivienda" class="input-group form-group" >
        {{ Form::label('Municipio',null,['class'=>'input-group-addon']) }}
        {!! Form::select('municipio',$municipios,145,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipio',  'style'=>'width: 100%']) !!}
    </div>
    <div class="input-group form-group">
        {{ Form::label('Fecha de Nacimiento',null,['class'=>'input-group-addon']) }}
        {{Form::date('fechaNacimientoEstudiante', \Carbon\Carbon::now())}}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Grado que Estudiará</span>
        {!! Form::select('gradoNuevo',$grados,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Sacramentos: </span>
        <span class="input-group-addon" id="basic-addon1">Bautismo</span>
        {!! Form::checkbox('sacramentoEstudiante[]','1') !!}
        <span class="input-group-addon" id="basic-addon1">Primera Comunión</span>
        {!! Form::checkbox('sacramentoEstudiante[]','2') !!}
        <span class="input-group-addon" id="basic-addon1">Confirma</span>
        {!! Form::checkbox('sacramentoEstudiante[]','3') !!}
    </div>
    <div class="input-group form-group">

        <span class="input-group-addon" id="basic-addon1">Estudió Parvularia</span>
        <label class="radio-inline">{!! Form::radio('estudioP','1', true) !!}Si</label>
        <label class="radio-inline">{!! Form::radio('estudioP','2') !!}No</label>
        <span class="input-group-addon" id="basic-addon1">Repite Grado</span>
        <label class="radio-inline">{!! Form::radio('repeatG','1', true) !!}Si</label>
        <label class="radio-inline">{!! Form::radio('repeatG','2') !!}No</label>
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Dirección de Residencia del Estudiante</span>
        {{Form::text('residenciaEstudiante',null,['class'=>'form-control', 'placeholder'=>'Dirección', 'aria-describedby'=>'basic-addon1'])}}
    </div>
    <div class="input-group form-group">
        {{ Form::label('Departamento',null,['class'=>'input-group-addon']) }}
        {!! Form::select('departamento',$departamentos,9,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'departmentVivienda', 'onchange'=>'GetMunicipiosVivienda(this)', 'style'=>'width: 100%']) !!}
    </div>
    <div id="divmun" class="input-group form-group" >
        {{ Form::label('Municipio',null,['class'=>'input-group-addon']) }}
        {!! Form::select('municipioVivienda',$municipios,145,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipioVivienda',  'style'=>'width: 100%']) !!}
    </div>

    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Padece Alguna Enfermedad: </span>
        <label class="radio-inline"><input type="radio" name="enfermedadRadio" value="1">Sí</label>
        <label class="radio-inline"><input type="radio" name="enfermedadRadio" value="2" checked>No</label>
        <span class="input-group-addon" id="basic-addon1">Nombre de la Enfermedad</span>
        <input type="text" class="form-control" name ="nombreEnfermedad"placeholder="Nombre de la enfermedad" aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">¿Posee Tratamiento Médico o Medícamentos?</span>
        <input type="text" class="form-control" name="TratamientoEnfermedad" placeholder="Describa tratamiento o medicamento" aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">EL/LA ESTUDIANTE SE RETIRA DE LA INSTITUCIÓN A LA HORA DE SALIDA: </span>
        <label class="radio-inline"><input type="radio" name="salidaRadio">Solo</label>
        <label class="radio-inline"><input type="radio" name="salidaRadio" checked>Acompañado</label>
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Nombre de la Persona Autorizada:</span>
        <input type="text" class="form-control" name ="personaAutorizada"placeholder="Nombre completo" aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">En caso de emergencia comunicarse con</span>
        <input type="text" class="form-control" name="CasoEmergenciaNombre" placeholder="Nombre completo" aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Dirección:</span>
        <input type="text" class="form-control" name="DireccioNEmergencia" placeholder="Dirección" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Teléfono</span>
        <input class="form-control" type="text" pattern="[0-9]{8}"   name="TelefonoEmergenciaNombre" placeholder="000000000" maxlength="8">
    </div>
    <h3>Historial Escolar del Estudiante</h3>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Último Grado Cursado</span>
        {!! Form::select('gradoAnterior',$grados,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoAnterior',  'style'=>'width: 100%']) !!}
        <span class="input-group-addon" id="basic-addon1">Centro Escolar Donde Cursó</span>
        <input type="text" class="form-control" name="NombreEscuelaAnterior" value="Colegio San Juan Bautista" placeholder="Nombre del centro escolar" aria-describedby="basic-addon1">
    </div>
    <h3>Documentos Entregados al Formalizar la Matrícula</h3>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Partida de Nacimiento Original</span>
        <input type="checkbox" name="DocumentosEntregados[]" value="1" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Certificado de Último Grado Aprobado</span>
        <input type="checkbox" name="DocumentosEntregados[]" value="2" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Fotocopia de los Padres o Responsable</span>
        <input type="checkbox" name="DocumentosEntregados[]" value="3"  aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">2 Fotografías Recientes</span>
        <input type="checkbox" name="DocumentosEntregados[]" value="4"  aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Observaciones</span>
        <input type="text" name ="observacionesMatricula"class="form-control" placeholder="Observaciones" aria-describedby="basic-addon1">
    </div>

<a href="#padre" aria-controls="profile" role="tab" data-toggle="tab">
    <button class="btn btn-primary">Siguiente</button></a>

</div>
</div>
</div>

