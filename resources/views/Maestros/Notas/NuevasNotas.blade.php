@extends('layouts.app4')
@section('content')
    <div class="container panel panel-body">
        <h3>Notas para la materia de {{$materia->materium->nombre}}</h3>
        <h3>Grado:  {{$materia->gradoseccion->grado->nombre}} {{$materia->gradoseccion->seccion->nombre}} </h3>
        @include('alertas.flash')
        @include('alertas.errores')
        <table class="table table-striped" id="mestrddos">
            <thead>
            <tr>
                <th>N°</th>
                <th>Alumnos</th>
                <th>Revision de Cuarderno (15%)</th>
                <th>Actividades Complementarias (20%)</th>
                <th>Actividades Integradoras (35%)</th>
                <th>Prueba Objetiva(30%)</th>
                <th>Promedio</th>
            </tr>
            </thead>
            <tbody>
            {!!Form::open(['route'=>['Notas.Insertar',$materia->id], 'method'=>'post', 'onsubmit'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}


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
                        @if($matricula->estudiante->notas!=NULL &&$matricula->estudiante->notas->count()!=0)

                          @foreach($matricula->estudiante->notas as $nota)

                              @if($nota->idTipoNota ==1 && $nota->idMateriaGrado ==$idM && $nota->idPeriodos == env('PERIODO_ID'))
                                  <?php $revision = $nota->nota*0.15 ;
                                  $revEn = 1;
                                  ?>

                                    {{Form::number('Revision[]',$nota->nota, ['class'=>'form-control','tabindex'=>'1','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}

                                @endif

                            @endforeach
                            @if($revEn ==0)
                                  {{Form::number('Revision[]',0, ['class'=>'form-control','tabindex'=>'1','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}
                                @endif

                            @else
                            {{Form::number('Revision[]',0, ['class'=>'form-control','tabindex'=>'1','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}

                    @endif
                    </td>
                    <td>
                        @if($matricula->estudiante->notas!=NULL &&$matricula->estudiante->notas->count()!=0)

                            @foreach($matricula->estudiante->notas as $nota)
                                @if($nota->idTipoNota ==2 && $nota->idMateriaGrado ==$idM && $nota->idPeriodos == env('PERIODO_ID'))
                                    <?php $actividadesComplementarias = $nota->nota*0.20;
                                    $actCEN = 1;?>
                                    {{Form::number('ActividadesComplementarias[]',$nota->nota, ['class'=>'form-control','tabindex'=>'2','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}
                                @endif
                            @endforeach
                                @if($actCEN ==0)
                                    {{Form::number('ActividadesComplementarias[]',0, ['class'=>'form-control','tabindex'=>'2','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}
                                @endif
                        @else
                            {{Form::number('ActividadesComplementarias[]',0, ['class'=>'form-control','tabindex'=>'2','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}

                        @endif
                    </td>


                    <td>
                        @if($matricula->estudiante->notas!=NULL &&$matricula->estudiante->notas->count()!=0)
                        @foreach($matricula->estudiante->notas as $nota)
                            @if($nota->idTipoNota ==3 && $nota->idMateriaGrado ==$idM && $nota->idPeriodos == env('PERIODO_ID'))
                                    <?php $actividadesIntegradores = $nota->nota*0.35 ;
                                    $actIEn=1?>
                                {{Form::number('ActividadesIntegradoras[]',$nota->nota, ['class'=>'form-control','tabindex'=>'3','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}
                    @endif
                    @endforeach
                            @if($actIEn ==0)
                                {{Form::number('ActividadesIntegradoras[]',0, ['class'=>'form-control','tabindex'=>'3','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}
                            @endif
                    @else
                    {{Form::number('ActividadesIntegradoras[]',0, ['class'=>'form-control','tabindex'=>'3','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}

                    @endif



                    </td>
                    <td>
                        @if($matricula->estudiante->notas!=NULL &&$matricula->estudiante->notas->count()!=0)
                        @foreach($matricula->estudiante->notas as $nota)
                            @if($nota->idTipoNota ==4 && $nota->idMateriaGrado ==$idM && $nota->idPeriodos == env('PERIODO_ID'))
                                    <?php $pruebaObtetiva = $nota->nota*0.30;
                                    $pruebEN=1;?>
                                {{Form::number('PruebaObjetiva[]',$nota->nota, ['class'=>'form-control','tabindex'=>'4','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}
                            @endif
                        @endforeach
                            @if($pruebEN ==0)
                                {{Form::number('PruebaObjetiva[]',0, ['class'=>'form-control','tabindex'=>'4','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}
                            @endif
                        @else
                                {{Form::number('PruebaObjetiva[]',0, ['class'=>'form-control','tabindex'=>'4','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}

                        @endif





                    </td>
                    <td><?php $promedio= $revision+$actividadesComplementarias+$actividadesIntegradores+$pruebaObtetiva;
                        $promedio = round($promedio,2);

                    ?>{{$promedio}} </td>
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