@include('includes.insert_formulario')
<div id="ingreso">
    <h3>Datos del Estudiante</h3>
    <div class="input-group form-group">
        {{Form::label('Nombres',null,['class'=>'input-group-addon'])}}
        {{Form::text('nombreEstudiante',$estudiante->user->nombre, ['class'=>'form-control', 'placeholder'=>'Ingrese los nombres del estudiante'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Apellidos',null,['class'=>'input-group-addon'])}}
        {{Form::text('apellido',$estudiante->user->apellido, ['class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del estudiante'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Género',null,['class'=>'input-group-addon'])}}
        @if($estudiante->user->genero ==1)
            <label class="radio-inline">{!! Form::radio('generoEstudiante','1', true) !!}Masculino</label>
            <label class="radio-inline">{!! Form::radio('generoEstudiante','2') !!}Femenino</label>
            @else
            <label class="radio-inline">{!! Form::radio('generoEstudiante','1') !!}Masculino</label>
            <label class="radio-inline">{!! Form::radio('generoEstudiante','2',true) !!}Femenino</label>
            @endif
    </div>
    <div class="input-group form-group">
        {{Form::label('Correo Electrónico',null,['class'=>'input-group-addon'])}}
        {{Form::email('correoEstudiante',$estudiante->user->email, ['class'=>'form-control', 'placeholder'=>'Ingrese e-mail del estudiante', 'id'=>'correoEstudiante', 'aria-describedby'=>'basic-addon1'])}}
    </div>
    @foreach($estudiante->user->direcciones as $direccion)
        @if($direccion->idTipoDireccion==1 )

            <div class="input-group form-group">
                {{Form::label('Lugar de Nacimiento',null,['class'=>'input-group-addon'])}}
                {{Form::text('lugarNacimiento',$direccion->detalle, ['class'=>'form-control', 'placeholder'=>'Lugar de Nacimiento', 'aria-describedby'=>'basic-addon1'])}}
            </div>
            <div class="input-group form-group">
                {{ Form::label('Departamento',null,['class'=>'input-group-addon']) }}
                {!! Form::select('departamento',$departamentos,$direccion->municipio->departamento->id,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'department', 'onchange'=>'GetMunicipios(this)', 'style'=>'width: 100%']) !!}
            </div>
            <div id="divmunVivienda" class="input-group form-group" >
                {{ Form::label('Municipio',null,['class'=>'input-group-addon']) }}
                {!! Form::select('municipio',$municipios,$direccion->idMunicipio,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipio',  'style'=>'width: 100%']) !!}
            </div>
        @endif
    @endforeach

    <div class="input-group form-group">
        {{ Form::label('Fecha de Nacimiento',null,['class'=>'input-group-addon']) }}
        {{Form::date('fechaNacimientoEstudiante', $estudiante->fechaNacimiento)}}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Grado que Estudiará</span>
        {!! Form::select('gradoNuevo',$grados,$estudiante->matriculas[0]->idGradoSeccion,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Sacramentos: </span>
            @foreach($sacramentosRegistrados as $sacramentosRegistrado)
                <?php

                $existe = 0;
                ?>

                @foreach($estudiante->user->sacramentousuarios as $sacramentoEstudiante)


                    @if($sacramentoEstudiante->idSacramento==$sacramentosRegistrado->id)
                        <?php
                        $existe = 1;
                        ?>
                    @endif
                @endforeach
                    <span class="input-group-addon" id="basic-addon1">{{$sacramentosRegistrado->nombre}}</span>
                    @if($existe==1)
                    <li>{!!  Form::checkbox('sacramentosEstudiante[]', $sacramentosRegistrado->id,true)!!}</li>
                @else
                    <li>{!!  Form::checkbox('sacramentosEstudiante[]', $sacramentosRegistrado->id)!!}</li>
                @endif

            @endforeach


    </div>
    <div class="input-group form-group">

        <span class="input-group-addon" id="basic-addon1">Estudió Parvularia</span>

        @if($estudiante->parvularia ==1)
            <label class="radio-inline">{!! Form::radio('estudioP','1', true) !!}Si</label>
            <label class="radio-inline">{!! Form::radio('estudioP','2') !!}No</label>
            @else
            <label class="radio-inline">{!! Form::radio('estudioP','1') !!}Si</label>
            <label class="radio-inline">{!! Form::radio('estudioP','2',true) !!}No</label>
            @endif


        <span class="input-group-addon" id="basic-addon1">Repite Grado</span>
        @if($estudiante->repiteGrado ==1)
            <label class="radio-inline">{!! Form::radio('repeatG','1',true) !!}Si</label>
            <label class="radio-inline">{!! Form::radio('repeatG','2') !!}No</label>
        @else
            <label class="radio-inline">{!! Form::radio('repeatG','1') !!}Si</label>
            <label class="radio-inline">{!! Form::radio('repeatG','2', true) !!}No</label>
        @endif

    </div>

    @foreach($estudiante->user->direcciones as $direccion)
        @if($direccion->idTipoDireccion==2 )
            <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1">Dirección de Residencia del Estudiante</span>
                {{Form::text('residenciaEstudiante',$direccion->detalle,['class'=>'form-control', 'placeholder'=>'Dirección', 'aria-describedby'=>'basic-addon1'])}}
            </div>
            <div class="input-group form-group">
                {{ Form::label('Departamento',null,['class'=>'input-group-addon']) }}
                {!! Form::select('departamento',$departamentos,$direccion->municipio->departamento->id,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'departmentVivienda', 'onchange'=>'GetMunicipiosVivienda(this)', 'style'=>'width: 100%']) !!}
            </div>
            <div id="divmun" class="input-group form-group" >
                {{ Form::label('Municipio',null,['class'=>'input-group-addon']) }}
                {!! Form::select('municipioVivienda',$municipiosEmergencia,$direccion->idMunicipio,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipioVivienda',  'style'=>'width: 100%']) !!}
            </div>
        @endif
        @endforeach




    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">EL/LA ESTUDIANTE SE RETIRA DE LA INSTITUCIÓN A LA HORA DE SALIDA: </span>

       @if($estudiante->retirada==1)

            <label class="radio-inline">{!! Form::radio('salidaRadio','1',true) !!}Solo</label>
            <label class="radio-inline">{!! Form::radio('salidaRadio','2') !!}Acompañado</label>
           @else
            <label class="radio-inline">{!! Form::radio('salidaRadio','1') !!}Solo</label>
            <label class="radio-inline">{!! Form::radio('salidaRadio','2', true) !!}Acompañado</label>
           @endif

    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Nombre de la Persona Autorizada:</span>
        {{Form::text('personaAutorizada',$estudiante->PersonaAutorizada,['class'=>'form-control', 'placeholder'=>'Nombre Completo', 'ariadescribedby'=>'basic-addon1'])}}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">En caso de emergencia comunicarse con</span>
        {{Form::text('CasoEmergenciaNombre',$estudiante->PersonaEmergencia,['class'=>'form-control', 'placeholder'=>'Nombre Completo', 'ariadescribedby'=>'basic-addon1'])}}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Dirección:</span>

            <?php $exiiste =0; ?>
            @foreach($estudiante->user->direcciones as $direccion)
                @if($direccion->idTipoDireccion==4 )
                   <?php
                    $direccionEstudianteEmergencia = $direccion->detalle;
                $exiiste =1;
                ?>
                 @endif
            @endforeach
            @if($exiiste>0)
            {{Form::text('residenciaEstudianteEmergencia',$direccionEstudianteEmergencia,['class'=>'form-control', 'placeholder'=>'Dirección', 'aria-describedby'=>'basic-addon1'])}}
                @else

            {{Form::text('residenciaEstudianteEmergencia',null,['class'=>'form-control', 'placeholder'=>'Dirección', 'aria-describedby'=>'basic-addon1'])}}
                @endif
        <span class="input-group-addon" id="basic-addon1">Teléfono</span>
        <?php $exiiste =0; ?>
        @foreach($estudiante->user->telefonos as $telefono)
            @if($telefono->idTipoTelefono==4 )
                <?php
                $telefonoEstudianteEmergencia = $telefono->telefono;
                $exiiste =1;
                ?>
            @endif
        @endforeach
        @if($exiiste>0)
            {{Form::text('TelefonoEmergenciaNombre',$telefonoEstudianteEmergencia,['class'=>'form-control','pattern'=>'[0-9]{8}','placeholder'=>'12345678', 'maxlength'=>'8'])}}
        @else

            {{Form::text('TelefonoEmergenciaNombre',null,['class'=>'form-control','pattern'=>'[0-9]{8}','placeholder'=>'12345678', 'maxlength'=>'8'])}}
        @endif

    </div>
    <h3>Documentos Entregados al Formalizar la Matrícula</h3>
    <div class="input-group form-group">


        @foreach($documentosR as $documentosRegistrados)
            <?php

            $existe = 0;
            ?>

            @foreach($estudiante->matriculas[0]->matriculadocumentos as $documentosEstudiante)


                @if($documentosEstudiante->idDocumento==$documentosRegistrados->id)
                    <?php
                    $existe = 1;
                    ?>
                @endif
            @endforeach

                <div class="input-group form-group">
            <span class="input-group-addon" id="basic-addon1">{{$documentosRegistrados->nombre}}</span>
            @if($existe==1)
                <li>{!!  Form::checkbox('DocumentosEntregados[]', $documentosRegistrados->id,true)!!}</li>
            @else
                <li>{!!  Form::checkbox('DocumentosEntregados[]', $documentosRegistrados->id)!!}</li>
            @endif
                </div>




        @endforeach



    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Observaciones</span>
        {{Form::text('observacionesMatricula',$estudiante->matriculas[0]->Observaciones,['class'=>'form-control', 'placeholder'=>'Observaciones', 'ariadescribedby'=>'basic-addon1'])}}
    </div>

    {!!Form::submit('Actualizar Estudiante', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
    {!!Form::close()!!}
</div>
</div>
</div>
