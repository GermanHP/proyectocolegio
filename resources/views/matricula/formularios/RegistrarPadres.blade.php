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
        {!! Form::select('oficiosPadres[]',$oficios,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
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
    </div>
    <h5>Estado Civíl</h5>
    <div class="input-group form-group">
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="1">Soltero</label>
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="2" checked>Casado</label>
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="3">Acompañados</label>
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="4">Divorciados</label>
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="5">Viudo/a</label>
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
        {!! Form::select('oficiosPadres[]',$oficios,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
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
    </div>
    <h5>Estado Civíl</h5>
    <div class="input-group form-group">
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="1">Soltero</label>
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="2" checked>Casado</label>
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="3">Acompañados</label>
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="4">Divorciados</label>
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="5">Viudo/a</label>
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
        {!! Form::select('oficiosPadres[]',$oficios,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}
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
    </div>
    <h5>Estado Civíl</h5>
    <div class="input-group form-group">
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="1">Soltero</label>
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="2" checked>Casado</label>
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="3">Acompañados</label>
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="4">Divorciados</label>
        <label class="radio-inline"><input type="radio" name="estadoCivil" value="5">Viudo/a</label>
    </div>

    <a href="#estudiante" aria-controls="profile" role="tab" data-toggle="tab">
        <button class="btn btn-danger">Atrás</button></a>
    <a href="#" ></a>
    {!!Form::submit('Registrar Estudiante', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
    {!!Form::close()!!}
</div>
