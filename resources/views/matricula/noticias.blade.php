@extends('layouts.app4')
@section('content')

        <div class="container panel panel-body">
        <h3>Nombre de la Noticia</h3>
        <div class="input-group form-group">
            <span class="input-group-addon" id="basic-addon1">Noticia</span>
            <input type="text" class="form-control" placeholder="Nombre de noticia" aria-describedby="basic-addon1">
        </div>
            <h3>Contenido de la noticia</h3>
            <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1">Contenido</span>
                <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
        </div>

@stop