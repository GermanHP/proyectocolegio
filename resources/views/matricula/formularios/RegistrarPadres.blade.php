<div class="container panel panel-body">
    <h3>Datos del Padre</h3>
    <div class="input-group form-group">
        {{Form::label('Nombres',null,['class'=>'input-group-addon'])}}
        {{Form::text('nombrePadre',null, ['class'=>'form-control', 'placeholder'=>'NOmbres'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Apellidos',null,['class'=>'input-group-addon'])}}
        {{Form::text('apellidosPadre',null, ['class'=>'form-control', 'placeholder'=>'Apellidos'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Correo Electrónico',null,['class'=>'input-group-addon'])}}
        {{Form::email('correoPadre',null, ['class'=>'form-control', 'placeholder'=>'e-mail', 'id'=>'correoPadre', 'aria-describedby'=>'basic-addon1'])}}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
        {{Form::text('DUIpadre',null,['class'=>'form-control','pattern'=>'[0-9]{9}','placeholder'=>'123456789', 'maxlength'=>'9'])}}
        <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
        {{Form::date('fechaNacimientoPadre', \Carbon\Carbon::now())}}
        <span class="input-group-addon" id="basic-addon1">Profesión u Oficio</span>
        {!! Form::select('oficiosPadre',$oficios,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Lugar de Trabajo</span>
        {{Form::text('lugarTrabajoPadre',null, ['class'=>'form-control', 'placeholder'=>'Lugar de Trabajo'])}}
        <span class="input-group-addon" id="basic-addon1">Teléfono</span>
        {{Form::text('telefonoTrabajoPadre',null,['class'=>'form-control','pattern'=>'[0-9]{8}','placeholder'=>'12345678', 'maxlength'=>'8'])}}
    </div>
    <div class="input-group form-group">
        {{ Form::label('Departamento',null,['class'=>'input-group-addon']) }}
        {!! Form::select('departamento',$departamentos,9,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'departmentPadre', 'onchange'=>'GetMunicipiosPadre(this)', 'style'=>'width: 100%']) !!}
    </div>
    <div id="divmunPadre" class="input-group form-group" >
        {{ Form::label('Municipio',null,['class'=>'input-group-addon']) }}
        {!! Form::select('municipioTrabajoPadre',$municipios,145,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipioTrabajoPadre',  'style'=>'width: 100%']) !!}
    </div>

    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Dirección del trabajo</span>
        {{Form::text('direccionTrabajoPadre',null, ['class'=>'form-control', 'placeholder'=>'Dirección'])}}
     </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Sacramentos: </span>
        <span class="input-group-addon" id="basic-addon1">Bautismo</span>
        {!! Form::checkbox('sacramentoPadre[]','1') !!}
        <span class="input-group-addon" id="basic-addon1">Primera Comunión</span>
        {!! Form::checkbox('sacramentoPadre[]','2') !!}
        <span class="input-group-addon" id="basic-addon1">Confirma</span>
        {!! Form::checkbox('sacramentoPadre[]','3') !!}
        <span class="input-group-addon" id="basic-addon1">Matrimonio</span>
        {!! Form::checkbox('sacramentoPadre[]','4') !!}
     </div>
    <h5>Estado Civíl</h5>
    <div class="input-group form-group">
        <label class="radio-inline">{!! Form::radio('estadoCivilPadre','1') !!}Soltero</label>
        <label class="radio-inline">{!! Form::radio('estadoCivilPadre','2', true) !!}Casado</label>
        <label class="radio-inline">{!! Form::radio('estadiCivilpadre','3') !!}Divorciado</label>
        <label class="radio-inline">{!! Form::radio('estadoCivilPadre','4') !!}Viudo</label>
        <label class="radio-inline">{!! Form::radio('estadoCivilPadre','5') !!}Acompañado</label>
    </div>
    <h3>Datos de la Madre</h3>
    <div class="input-group form-group">
        {{Form::label('Nombres',null,['class'=>'input-group-addon'])}}
        {{Form::text('nombreMadre',null, ['class'=>'form-control', 'placeholder'=>'Nombres'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Apellidos',null,['class'=>'input-group-addon'])}}
        {{Form::text('apellidoMadre',null, ['class'=>'form-control', 'placeholder'=>'Apellidos'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Correo Electrónico',null,['class'=>'input-group-addon'])}}
        {{Form::email('correoMadre',null, ['class'=>'form-control', 'placeholder'=>'e-mail', 'id'=>'correoMadre', 'aria-describedby'=>'basic-addon1'])}}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
        {{Form::text('DUIMadre',null,['class'=>'form-control','pattern'=>'[0-9]{9}','placeholder'=>'123456789', 'maxlength'=>'9'])}}
        <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
        {{Form::date('fechaNacimientoMadre', \Carbon\Carbon::now())}}
        <span class="input-group-addon" id="basic-addon1">Profesión u Oficio</span>
        {!! Form::select('oficioMadre',$oficios,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Lugar de Trabajo</span>
        {{Form::text('lugarTrabajoMadre',null, ['class'=>'form-control', 'placeholder'=>'Lugar de Trabajo'])}}
        <span class="input-group-addon" id="basic-addon1">Teléfono</span>
        {{Form::text('telefonoTrabajoMadre',null,['class'=>'form-control','pattern'=>'[0-9]{8}','placeholder'=>'12345678', 'maxlength'=>'8'])}}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Dirección del trabajo</span>
        {{Form::text('direccionTrabajoMadre',null, ['class'=>'form-control', 'placeholder'=>'Dirección'])}}
    </div>
    <div class="input-group form-group">
        {{ Form::label('Departamento',null,['class'=>'input-group-addon']) }} {!! Form::select('departamento',$departamentos,9,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'departmentMadre', 'onchange'=>'GetMunicipiosMadre(this)', 'style'=>'width: 100%']) !!}
    </div>
    <div id="divmunMadre" class="input-group form-group" >
        {{ Form::label('Municipio',null,['class'=>'input-group-addon']) }}{!! Form::select('municipioTrabajoMadre',$municipios,145,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipioMadre',  'style'=>'width: 100%']) !!}
    </div>

    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Sacramentos: </span>
        <span class="input-group-addon" id="basic-addon1">Bautismo</span>
        {!! Form::checkbox('sacramentoMadre[]','1') !!}
        <span class="input-group-addon" id="basic-addon1">Primera Comunión</span>
        {!! Form::checkbox('sacramentoMadre[]','2') !!}
        <span class="input-group-addon" id="basic-addon1">Confirma</span>
        {!! Form::checkbox('sacramentoMadre[]','3') !!}
        <span class="input-group-addon" id="basic-addon1">Matrimonio</span>
        {!! Form::checkbox('sacramentoMadre[]','4') !!}
    </div>
    <h5>Estado Civíl</h5>
    <div class="input-group form-group">
        <label class="radio-inline">{!! Form::radio('estadoCivilMadre','1') !!}Soltero</label>
        <label class="radio-inline">{!! Form::radio('estadoCivilMadre','2', true) !!}Casado</label>
        <label class="radio-inline">{!! Form::radio('estadiCivilMadre','3') !!}Divorciado</label>
        <label class="radio-inline">{!! Form::radio('estadoCivilMadre','4') !!}Viudo</label>
        <label class="radio-inline">{!! Form::radio('estadoCivilMadre','5') !!}Acompañado</label>
    </div>
    <h3>Datos del Responsable</h3>
    <div class="input-group form-group">
        {{Form::label('Nombres',null,['class'=>'input-group-addon'])}}
        {{Form::text('nombreResponsable',null, ['class'=>'form-control', 'placeholder'=>'Nombres'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Apellidos',null,['class'=>'input-group-addon'])}}
        {{Form::text('apellidoResponsable',null, ['class'=>'form-control', 'placeholder'=>'Apellidos'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Género',null,['class'=>'input-group-addon'])}}
        <label class="radio-inline">{!! Form::radio('generoResponsable','1', true) !!}Masculino</label>
        <label class="radio-inline">{!! Form::radio('generoResponsable','2') !!}Femenino</label>
    </div>
    <div class="input-group form-group">
        {{Form::label('Correo Electrónico',null,['class'=>'input-group-addon'])}}
        {{Form::email('correoResponble',null, ['class'=>'form-control', 'placeholder'=>'e-mail', 'id'=>'correoMadre', 'aria-describedby'=>'basic-addon1'])}}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
        {{Form::text('DUIResponsable',null,['class'=>'form-control','pattern'=>'[0-9]{9}','placeholder'=>'123456789', 'maxlength'=>'9'])}}
        <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
        {{Form::date('fechaNacimientoResponsable', \Carbon\Carbon::now())}}
        <span class="input-group-addon" id="basic-addon1">Profesión u Oficio</span>
        {!! Form::select('oficioResponsable',$oficios,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Lugar de Trabajo</span>
        {{Form::text('lugarTrabajoResponsable',null, ['class'=>'form-control', 'placeholder'=>'Lugar de Trabajo'])}}
        <span class="input-group-addon" id="basic-addon1">Teléfono</span>
        {{Form::text('telefonoTrabajoResponsable',null,['class'=>'form-control','pattern'=>'[0-9]{8}','placeholder'=>'12345678', 'maxlength'=>'8'])}}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Dirección del trabajo</span>
        {{Form::text('direccionTrabajoResponsable',null, ['class'=>'form-control', 'placeholder'=>'Dirección'])}}
    </div>
    <div class="input-group form-group">
        {{ Form::label('Departamento',null,['class'=>'input-group-addon']) }} {!! Form::select('departamento',$departamentos,9,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'departmentResponsable', 'onchange'=>'GetMunicipiosResponsable(this)', 'style'=>'width: 100%']) !!}
    </div>
    <div id="divmunResponsable" class="input-group form-group" >
        {{ Form::label('Municipio',null,['class'=>'input-group-addon']) }}{!! Form::select('municipioTrabajoResponsable',$municipios,145,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipioRespobsable',  'style'=>'width: 100%']) !!}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Sacramentos: </span>
        <span class="input-group-addon" id="basic-addon1">Bautismo</span>
        {!! Form::checkbox('sacramentoResponsable[]','1') !!}
        <span class="input-group-addon" id="basic-addon1">Primera Comunión</span>
        {!! Form::checkbox('sacramentoResponsable[]','2') !!}
        <span class="input-group-addon" id="basic-addon1">Confirma</span>
        {!! Form::checkbox('sacramentoResponsable[]','3') !!}
        <span class="input-group-addon" id="basic-addon1">Matrimonio</span>
        {!! Form::checkbox('sacramentoResponsable[]','4') !!}
    </div>
    <h5>Estado Civíl</h5>
    <div class="input-group form-group">
        <label class="radio-inline">{!! Form::radio('estadoCivilResponsable','1') !!}Soltero</label>
        <label class="radio-inline">{!! Form::radio('estadoCivilResponsable','2', true) !!}Casado</label>
        <label class="radio-inline">{!! Form::radio('estadiCivilResponsable','3') !!}Divorciado</label>
        <label class="radio-inline">{!! Form::radio('estadoCivilResponsable','4') !!}Viudo</label>
        <label class="radio-inline">{!! Form::radio('estadoCivilResponsable','5') !!}Acompañado</label>
    </div>

    <a href="#estudiante" aria-controls="profile" role="tab" data-toggle="tab">
        <button class="btn btn-danger">Atrás</button></a>
    <a href="#" ></a>
    {!!Form::submit('Registrar Estudiante', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
    {!!Form::close()!!}
</div>
