@extends('layouts.app4')
@section('content')
    <div class="container panel panel-body">
        <h3>Notas para la materia de {{$materia->materium->nombre}}</h3>
        <h3>Grado:  {{$materia->gradoseccion->grado->nombre}} {{$materia->gradoseccion->seccion->nombre}} </h3>
        @include('alertas.flash')
        @include('alertas.errores')
        {!!link_to_route('MisMaterias.Maestro', $title = 'Regresar',  $parameters =[], $attributes = ['class'=>'btn btn-info','onclick'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
        <table class="table table-striped" id="mestrddos">
            <thead>
            <tr>
                <th>N°</th>
                <th>Alumnos</th>
                <th>Nota</th>

            </tr>
            </thead>
            <tbody>
            {!!Form::open(['route'=>['Notas.InsertarPrepa',$materia->id], 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}


            <?php $contador = 0; ?>
            @foreach($alumnos as $alumno)



                @foreach($materia->gradoseccion->matriculas as $matricula)
                    @if($matricula->estudiante->id==$alumno->id)

                        <tr>
                            <td><?php
                                $contador++ ;
                                $revision =0;
                                $actividadesComplementarias=0;
                                $actividadesIntegradores = 0;
                                $pruebaObtetiva = 0;

                                $revEn = 0;
                                $actCEN = 0;
                                $actIEn = 0;
                                $pruebEN = 0;

                                ?>{{$contador}}</td>
                            <td>

                                @if($matricula->estudiante->id == $alumno->id)
                                    {{$alumno->apellido}} {{$alumno->nombre}}
                                @endif



                            </td>
                            <td>

                                    {!! Form::select('notasPrepa[]',$notaPrepa,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'department', 'onchange'=>'GetMunicipios(this)', 'style'=>'width: 100%']) !!}



                            </td>

                        </tr>
                    @endif
                @endforeach
            @endforeach



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