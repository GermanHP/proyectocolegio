<div class="container panel panel-body">
    <h3>Datos del Padre</h3>
    <div class="input-group form-group">
        {{Form::label('Nombres',null,['class'=>'input-group-addon'])}}
        {{Form::text('nombrePadre',$padreDeFamilia->user->nombre, ['class'=>'form-control', 'placeholder'=>'Nombres'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Apellidos',null,['class'=>'input-group-addon'])}}
        {{Form::text('apellidosPadre',$padreDeFamilia->user->apellido, ['class'=>'form-control', 'placeholder'=>'Apellidos'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Correo Electrónico',null,['class'=>'input-group-addon'])}}
        {{Form::email('correoPadre',$padreDeFamilia->user->email, ['class'=>'form-control', 'placeholder'=>'e-mail', 'id'=>'correoPadre', 'aria-describedby'=>'basic-addon1'])}}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
        {{Form::text('DUIpadre',$padreDeFamilia->DUI,['class'=>'form-control','pattern'=>'[0-9]{9}','placeholder'=>'123456789', 'maxlength'=>'9'])}}
        <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
        {{Form::date('fechaNacimientoPadre', $padreDeFamilia->fechaNacimiento)}}
        <span class="input-group-addon" id="basic-addon1">Profesión u Oficio</span>
        {!! Form::select('oficiosPadre',$oficios,$padreDeFamilia->idOficio,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Lugar de Trabajo</span>
        {{Form::text('lugarTrabajoPadre',$padreDeFamilia->nombreLugarTrabajo, ['class'=>'form-control', 'placeholder'=>'Lugar de Trabajo'])}}
        <span class="input-group-addon" id="basic-addon1">Teléfono</span>
        @foreach($padreDeFamilia->user->telefonos as $telefono)
            @if($telefono->idTipoTelefono==2)
                {{Form::text('telefonoTrabajoPadre',$telefono->telefono,['class'=>'form-control','pattern'=>'[0-9]{8}','placeholder'=>'12345678', 'maxlength'=>'8'])}}
                @endif
            @endforeach

    </div>
    <div class="input-group form-group">
        @foreach($padreDeFamilia->user->direcciones as $direccion)
            @if($direccion->idTipoDireccion == 3)
                {{ Form::label('Departamento',null,['class'=>'input-group-addon']) }}
                {!! Form::select('departamento',$departamentos,$direccion->municipio->departamento->id,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'departmentPadre', 'onchange'=>'GetMunicipiosPadre(this)', 'style'=>'width: 100%']) !!}
    </div>
    <div id="divmunPadre" class="input-group form-group" >
        {{ Form::label('Municipio',null,['class'=>'input-group-addon']) }}
        {!! Form::select('municipioTrabajoPadre',$municipios,$direccion->idMunicipio,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipioTrabajoPadre',  'style'=>'width: 100%']) !!}
    </div>

    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Dirección del trabajo</span>
        {{Form::text('direccionTrabajoPadre',$direccion->detalle, ['class'=>'form-control', 'placeholder'=>'Dirección'])}}
    </div>
                @endif
            @endforeach

    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Sacramentos: </span>

        @foreach($sacramentosRegistrados as $sacramentosRegistrado)
            <?php

            $existe = 0;
            ?>

            @foreach($padreDeFamilia->user->sacramentousuarios as $sacramentoEstudiante)


                @if($sacramentoEstudiante->idSacramento==$sacramentosRegistrado->id)
                    <?php
                    $existe = 1;
                    ?>
                @endif
            @endforeach
            <span class="input-group-addon" id="basic-addon1">{{$sacramentosRegistrado->nombre}}</span>
            @if($existe==1)
                <li>{!!  Form::checkbox('sacramentoPadre[]', $sacramentosRegistrado->id,true)!!}</li>
            @else
                <li>{!!  Form::checkbox('sacramentoPadre[]', $sacramentosRegistrado->id)!!}</li>
            @endif

        @endforeach

    </div>
    <h5>Estado Civíl</h5>
    <div class="input-group form-group">
        @foreach($estadoCivil as $estado)
            @if($estado->id == $padreDeFamilia->idEstadoCivil)
                <label class="radio-inline">{!! Form::radio('estadoCivilPadre',$estado->id, true) !!}{{$estado->nombre}}</label>
            @else
                <label class="radio-inline">{!! Form::radio('estadoCivilPadre',$estado->id) !!}{{$estado->nombre}}</label>
            @endif

            @endforeach


    </div>


    {!!Form::submit('Actualizar Datos', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
    {!!Form::close()!!}
</div>
