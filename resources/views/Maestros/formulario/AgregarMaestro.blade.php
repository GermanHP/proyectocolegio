<div class="container panel panel-body">
    <h3>Datos del Padre</h3>
    <div class="input-group form-group">
        {{Form::label('Nombres',null,['class'=>'input-group-addon'])}}
        {{Form::text('nombre',null, ['class'=>'form-control', 'placeholder'=>'Nombres'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Apellidos',null,['class'=>'input-group-addon'])}}
        {{Form::text('apellido',null, ['class'=>'form-control', 'placeholder'=>'Apellidos'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Correo Electrónico',null,['class'=>'input-group-addon'])}}
        {{Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'e-mail', 'id'=>'correoPadre', 'aria-describedby'=>'basic-addon1'])}}
    </div>

        <div class="input-group form-group">
            {{Form::label('Género',null,['class'=>'input-group-addon'])}}
            <label class="radio-inline">{!! Form::radio('genero','1') !!}Masculino</label>
            <label class="radio-inline">{!! Form::radio('genero','2',true) !!}Femenino</label>
        </div>

    <div class="input-group form-group">
        {{Form::label('Titulo',null,['class'=>'input-group-addon'])}}
        {{Form::text('titulo',null, ['class'=>'form-control', 'placeholder'=>'Titulo'])}}
    </div>
    <div class="input-group form-group">
        {{Form::label('Descripcion',null,['class'=>'input-group-addon'])}}
        {{Form::text('descripcion',null, ['class'=>'form-control', 'placeholder'=>'Descripcion'])}}
    </div>

    {!!Form::submit('Guardar Datos', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
    {!!Form::close()!!}
</div>
