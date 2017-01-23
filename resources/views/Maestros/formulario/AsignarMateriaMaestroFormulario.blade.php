<div class="container panel panel-body">
    <div class="input-group form-group">
        {{ Form::label('Materias por Asignar',null,['class'=>'input-group-addon']) }}
        {!! Form::select('materias',$materias,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required',  'style'=>'width: 100%']) !!}
    </div>
    <div id="divmunVivienda" class="input-group form-group" >
        {{ Form::label('Maestros Registrados',null,['class'=>'input-group-addon']) }}
        {!! Form::select('maestro',$maestros,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required','style'=>'width: 100%']) !!}
    </div>

    {!!Form::submit('Guardar Datos', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
    {!!Form::close()!!}
</div>