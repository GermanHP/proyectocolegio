<div class="container panel panel-body">
    <div class="input-group form-group">
        {{ Form::label('Grado sin Responsable Asignado',null,['class'=>'input-group-addon']) }}
        {!! Form::select('grado',$grados,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'department', 'onchange'=>'GetMunicipios(this)', 'style'=>'width: 100%']) !!}
    </div>
    <div id="divmunVivienda" class="input-group form-group" >
        {{ Form::label('Maestros Registrados',null,['class'=>'input-group-addon']) }}
        {!! Form::select('maestro',$maestros,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipio',  'style'=>'width: 100%']) !!}
    </div>

    {!!Form::submit('Guardar Datos', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
    {!!Form::close()!!}
</div>
