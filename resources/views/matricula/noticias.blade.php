@extends('layouts.app4')
@section('content')

        <div class="container panel panel-body">
        <h3>Nombre de la Noticia</h3>

            {!!Form::open(['route'=>'Noticias.Guardar', 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Guardando Espere... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
            @include('alertas.flash')
            @include('alertas.errores')
        <div class="input-group form-group">
            <span class="input-group-addon" id="basic-addon1">Noticia</span>
            <input type="text" name="titulo" class="form-control" placeholder="Nombre de noticia" aria-describedby="basic-addon1">
        </div>
            <h3>Contenido de la noticia</h3>
            <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1">Contenido</span>
                <textarea class="form-control" rows="5" name="cuerpo" id="comment"></textarea><br><br>
                  <span class="input-group-addon" id="basic-addon1">Grado al que desea notificar</span>
                    {!! Form::select('gradoseccion',$grados,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}

                {!!Form::submit('Guardar Noticia', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
                {!! Form::close() !!}
            </div>



        </div>


        <div class="container panel panel-body">
            <h3>Registro de Noticias</h3>


            @include('alertas.flash')
            @include('alertas.errores')

            <table class="table table-striped" id="mestros">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Noticia</th>
                    <th>Grado al que se envio</th>

                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                @foreach($noticias as $noticia)

                    <td>{{$noticia->Titulo}}</td>
                    <td>{{$noticia->Cuerpo}}</td>
                    <td>{{$noticia->gradoseccion->grado->nombre}} {{$noticia->gradoseccion->seccion->nombre}}</td>
                    <td><b>No hay Acciones Permitidas</b></td>
                    @endforeach

                </tbody>
            </table>
        </div>
        <script>
            $(document).ready(function () {
                $('#mestros').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    responsive: true,
                    "autoWidth": true,

                    "order": [[3, 'asc'], [2, 'desc']],
                    "language": {


                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Mostrar _MENU_ registros",
                        "sZeroRecords": "No se encontraron resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Ãšltimo",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }

                    }

                });
            })
        </script>



@stop