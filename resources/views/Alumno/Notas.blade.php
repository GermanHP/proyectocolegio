@extends('layouts.app5')
@section('content')
    <div class="container panel panel-body">
        <h3>Registro de Notas</h3>
        @if(Auth::user()->genero == 1)
            <h2>Bienvenido {{Auth::user()->nombre}} {{Auth::user()->apellido}}</h2>
        @else
            <h2>Bienvenida {{Auth::user()->nombre}} {{Auth::user()->apellido}}</h2>
        @endif

        @include('alertas.flash')
        @include('alertas.errores')

        <table class="table table-striped" id="matriculados">
            <thead>
            <tr>
                <th>Periodo</th>
                <th>Revision de Cuarderno (15%)</th>
                <th>Actividades Complementarias (20%)</th>
                <th>Actividades Integradoras (35%)</th>
                <th>Prueba Objetiva(30%)</th>
                <th>Promedio</th>
            </tr>
            </thead>
            <tbody>
            @foreach($periodos as $periodo)
                <tr>
                    <td>{{$periodo->nombre}}</td>
                    <td>
                        <?php
                        $revision=0;

                        $rev=0;

                        ?>
                    @foreach($notas as $nota)

                     @if($nota->id!=null)
                            @if($nota->idPeriodos == $periodo->id && $nota->idTipoNota ==1)
                                <?php $revision = $nota->nota*0.15;
                                $rev=1?>
                                {{$nota->nota}}
                            @endif
                        @endif

                @endforeach
                        @if($rev==0)
                            0.00
                            @endif
                    </td>

                    <td>
                        <?php

                        $complementarias=0;

                        $rev=0;

                        ?>
                        @foreach($notas as $nota)

                            @if($nota->id!=null)
                                @if($nota->idPeriodos == $periodo->id && $nota->idTipoNota ==2)
                                    <?php $complementarias = $nota->nota*0.20;
                                    $rev=1?>
                                    {{$nota->nota}}
                                @endif
                            @endif

                        @endforeach
                        @if($rev==0)
                            0.00
                        @endif
                    </td>

                    <td>
                        <?php

                        $integradoras=0;

                        $rev=0;

                        ?>
                        @foreach($notas as $nota)

                            @if($nota->id!=null)
                                @if($nota->idPeriodos == $periodo->id && $nota->idTipoNota ==3)
                                    <?php $integradoras = $nota->nota*0.35;
                                    $rev=1?>
                                    {{$nota->nota}}
                                @endif
                            @endif

                        @endforeach
                        @if($rev==0)
                            0.00
                        @endif
                    </td>

                    <td>
                        <?php

                        $pruebaObjetiva=0;
                        $rev=0;

                        ?>
                        @foreach($notas as $nota)

                            @if($nota->id!=null)
                                @if($nota->idPeriodos == $periodo->id && $nota->idTipoNota ==4)
                                    <?php $pruebaObjetiva = $nota->nota*0.3;
                                    $rev=1?>
                                    {{$nota->nota}}
                                @endif
                            @endif

                        @endforeach
                        @if($rev==0)
                            0.00
                        @endif
                    </td>


                    <td>
                        <?php $promedio= $revision+$complementarias+$integradoras+$pruebaObjetiva;
                        $promedio = round($promedio,2);

                        ?>
                           <b>{{$promedio}}</b>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function () {
            $('#matriculados').DataTable({
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