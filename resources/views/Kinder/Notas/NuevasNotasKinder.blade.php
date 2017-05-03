@extends('layouts.app4')
@section('content')
    <div class="panel panel-body">
        <h3>Notas del area de {{$area->nombre}} </h3>
        <h3>Grado: {{$gradoSeccion->grado->nombre}} {{$gradoSeccion->seccion->nombre}}  </h3>
        @include('alertas.flash')
        @include('alertas.errores')

        <table class="table table-striped" id="kinder" border="1" bordercolor="#0000">
            <thead>
            <tr>
                <th>N°</th>
                <th>Alumnos</th>
                @foreach($indicadores as $indicadore)
                    <th class="contenido centrar">{{$indicadore->nombreIndicador}}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            {!!Form::open(['route'=>['Notas.Prepa.NuevasGuardaar',$id,$idArea], 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
            @for($i=0;$i<count($alumnos);$i++)
                <tr>
                    <td>{{$i+1}}</td>
                    <td><input type="hidden" name="idEstudiante[]" value="{{$alumnos[$i]->id}}">{{$alumnos[$i]->apellido}} {{$alumnos[$i]->nombre}}</td>
                    @foreach($indicadores as $indicadore)
                        <td>
                            <?php $existente = false; ?>
                            @foreach($notasIngresadas as $ingresada)
                                @if($ingresada->idIndicador == $indicadore->id && $ingresada->idEstudiante==$alumnos[$i]->id)
                                        <?php $existente = true; ?>
                                            <select class="js-example-basic-single form-control " describedby="basic-addon1" required="required" style="width: 100%" name="nota_{{$indicadore->id}}[]">
                                                @foreach($notaPrepa as $notaTipo)
                                                    @if($ingresada->idTipoNotaPrepa==$notaTipo->id)
                                                        <option value="{{$notaTipo->id}}" selected>{{$notaTipo->nota}}</option>
                                                    @else
                                                        <option value="{{$notaTipo->id}}">{{$notaTipo->nota}}</option>
                                                    @endif

                                                @endforeach
                                            </select>
                                 @endif
                             @endforeach
                                @if(!$existente)
                                    <select class="js-example-basic-single form-control " describedby="basic-addon1" required="required" style="width: 100%" name="nota_{{$indicadore->id}}[]">
                                        @foreach($notaPrepa as $notaTipo)
                                            <option value="{{$notaTipo->id}}">{{$notaTipo->nota}}</option>
                                        @endforeach
                                    </select>
                                    @endif

                        </td>
                    @endforeach
                </tr>
            @endfor
            </tbody>
            {!!Form::submit('Guardar Notas', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
            {!! Form::close() !!}
        </table>

    </div>

    <script>
        $(document).ready(function () {
            $('#mestros').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                responsive: true,
                "autoWidth": true,

                "order": [[0, 'asc']],
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