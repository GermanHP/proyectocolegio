<div class="container panel panel-body">
    <h3>Datos del Padre</h3>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Nombres</span>
        <input type="text" class="form-control" name="nombrePadre" placeholder="Nombres" aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Apellidos</span>
        <input type="text" class="form-control" name="apellidosPadre" placeholder="Apellidos..." aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
        <input class="form-control" name="DUIpadre" type="text" pattern="[0-9]{9}"  placeholder="0000000000" maxlength="9">
        <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
        <input type="date" name="fechaNacimientoPadre">
        <span class="input-group-addon" id="basic-addon1">Profesión u Oficio</span>
        {!! Form::select('oficiosPadre',$oficios,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Lugar de Trabajo</span>
        <input type="text" class="form-control" name="lugarTrabajoPadre" placeholder="Lugar de trabajo" aria-describedby="basic-addon1">

        <span class="input-group-addon" id="basic-addon1">Teléfono</span>
        <input class="form-control" type="text" name="telefonoTrabajoPadre" pattern="[0-9]{8}"  placeholder="000000000" maxlength="8">

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
        <input type="text" class="form-control" placeholder="Dirección" aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Sacramentos: </span>
        <span class="input-group-addon" id="basic-addon1">Bautismo</span>
        <input type="checkbox" name="sacramentosPadre[]" value="1" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Primera Comunión</span>
        <input type="checkbox" name="sacramentosPadre[]" value="2" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Confirma</span>
        <input type="checkbox"  name="sacramentosPadre[]" value="3" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Matrimonio</span>
        <input type="checkbox"  name="sacramentosPadre[]" value="4" aria-describedby="basic-addon1">
    </div>
    <h5>Estado Civíl</h5>
    <div class="input-group form-group">
        <label class="radio-inline"><input type="radio" name="estadoCivilPadre" value="1">Soltero</label>
        <label class="radio-inline"><input type="radio" name="estadoCivilPadre" value="2" checked>Casado</label>
        <label class="radio-inline"><input type="radio" name="estadoCivilPadre" value="3">Divorciados</label>
        <label class="radio-inline"><input type="radio" name="estadoCivilPadre" value="4">Viudo/a</label>
        <label class="radio-inline"><input type="radio" name="estadoCivilPadre" value="5">Acompañados</label>
    </div>
    <h3>Datos de la Madre</h3>
    <div class="input-group form-group">
        <span class="input-group-addon"  id="basic-addon1">Nombres</span>
        <input type="text" class="form-control" name="nombreMadre" placeholder="Nombres" aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Apellidos</span>
        <input type="text" class="form-control" name="apellidoMadre" placeholder="Apellidos..." aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
        <input class="form-control" type="text" name="DUIMadre" pattern="[0-9]{9}"  placeholder="0000000000" maxlength="9">
        <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
        <input type="date" name="fechaNacimientoMadre">
        <span class="input-group-addon" id="basic-addon1">Profesión u Oficio</span>
        {!! Form::select('oficioMadre',$oficios,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
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
        {{ Form::label('Departamento',null,['class'=>'input-group-addon']) }} {!! Form::select('departamento',$departamentos,9,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'departmentMadre', 'onchange'=>'GetMunicipiosMadre(this)', 'style'=>'width: 100%']) !!}
    </div>
    <div id="divmunMadre" class="input-group form-group" >
        {{ Form::label('Municipio',null,['class'=>'input-group-addon']) }}{!! Form::select('municipioTrabajoMadre',$municipios,145,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipioMadre',  'style'=>'width: 100%']) !!}
    </div>

    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Sacramentos: </span>
        <span class="input-group-addon" id="basic-addon1">Bautismo</span>
        <input type="checkbox" name="sacramentosMadre[]" value="1" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Primera Comunión</span>
        <input type="checkbox" name="sacramentosMadre[]" value="2" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Confirma</span>
        <input type="checkbox"  name="sacramentosMadre[]" value="3" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Matrimonio</span>
        <input type="checkbox"  name="sacramentosMadre[]" value="4" aria-describedby="basic-addon1">
    </div>
    <h5>Estado Civíl</h5>
    <div class="input-group form-group">
        <label class="radio-inline"><input type="radio" name="estadoCivilMadre" value="1">Soltero</label>
        <label class="radio-inline"><input type="radio" name="estadoCivilMadre" value="2" checked>Casado</label>
        <label class="radio-inline"><input type="radio" name="estadoCivilMadre" value="3">Divorciados</label>
        <label class="radio-inline"><input type="radio" name="estadoCivilMadre" value="4">Viudo/a</label>
        <label class="radio-inline"><input type="radio" name="estadoCivilMadre" value="5">Acompañados</label>
    </div>
    <h3>Datos del Responsable</h3>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Nombres</span>
        <input type="text" name="nombreResponsable" class="form-control" placeholder="Nombres" aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Apellidos</span>
        <input type="text" class="form-control" name="apellidoResponsable" placeholder="Apellidos..." aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
        <input class="form-control"  name="DUIResponsable" type="text" pattern="[0-9]{9}"  placeholder="0000000000" maxlength="9">
        <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
        <input type="date" name="FechaNacimientoResponsable">
        <span class="input-group-addon" id="basic-addon1">Profesión u Oficio</span>
        {!! Form::select('oficioResponsable',$oficios,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Lugar de Trabajo</span>
        <input type="text" name="lugarTrabajoResponsable" class="form-control" placeholder="Lugar de trabajo" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Teléfono</span>
        <input class="form-control" type="text" name="telefonoTrabajoResponsable"pattern="[0-9]{8}"  placeholder="000000000" maxlength="8">
    </div>

    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Dirección del trabajo</span>
        <input type="text" name="DireccionTrabajoResponsable" class="form-control" placeholder="Dirección" aria-describedby="basic-addon1">
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
        <input type="checkbox" name="sacramentosResponsable[]" value="1" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Primera Comunión</span>
        <input type="checkbox" name="sacramentosResponsable[]" value="2" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Confirma</span>
        <input type="checkbox"  name="sacramentosResponsable[]" value="3" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">Matrimonio</span>
        <input type="checkbox"  name="sacramentosResponsable[]" value="4" aria-describedby="basic-addon1">
    </div>
    <h5>Estado Civíl</h5>
    <div class="input-group form-group">
        <label class="radio-inline"><input type="radio" name="estadoCivilResponsable" value="1">Soltero</label>
        <label class="radio-inline"><input type="radio" name="estadoCivilResponsable" value="2" checked>Casado</label>
        <label class="radio-inline"><input type="radio" name="estadoCivilResponsable" value="3">Divorciados</label>
        <label class="radio-inline"><input type="radio" name="estadoCivilResponsable" value="4">Viudo/a</label>
        <label class="radio-inline"><input type="radio" name="estadoCivilResponsable" value="5">Acompañados</label>
    </div>

    <a href="#estudiante" aria-controls="profile" role="tab" data-toggle="tab">
        <button class="btn btn-danger">Atrás</button></a>
    <a href="#" ></a>
    {!!Form::submit('Registrar Estudiante', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
    {!!Form::close()!!}
</div>
