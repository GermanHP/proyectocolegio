<html>
<head>

</head>
<!-- Tell the browser to be responsive to screen width -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!-- Bootstrap 3.3.5 -->
<style>
    <?php include(public_path() . '/assets/css/bootstrap.css');?>
    <?php include(public_path() . '/assets/dist/css/AdminLTE.css');?>
    <?php include(public_path() . '/assets/dist/css/skins/_all-skins.css');?>
    <?php include(public_path() . '/assets/css/font-awesome.css');?>

@page teacher {
        size: auto ;
        margin: 0.5cm;
    }

    .teacherPage {
        page: teacher;
        page-break-after: always;
    }

    .text-rotation {display: block;
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
    }

    .docente{
        margin-left: 4%;
    }

    label{
        font-size: xx-large;
    }

    .director{
        margin-top: -4.5%;
    }

    .director2{
        margin-top: -4%;
        margin-right: 11%;
    }

    .Rotate-90
    {
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);

        position: relative;
        left:75px;


    }

    img#logoboleta{
        margin-left: 40px;
    }

    .ajuste-margen{
        margin-top: -156px;
    }

    .adjust-img{
        margin-top: -24px;
    }

    .ajustar{
        height: 200px;
        width: 110px;
        float: left;
        white-space: pre; /* CSS 2.0 */
        white-space: pre-wrap; /* CSS 2.1 */
        white-space: pre-line; /* CSS 3.0 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        white-space: -moz-pre-wrap; /* Mozilla */
        white-space: -hp-pre-wrap; /* HP */
        word-wrap: break-word; /* IE 5+ */
    }
</style>

<body style="height: 300px;!important; background: white;">

<?php $nVueltas = 0; ?>
@foreach($alumnos as $alumno)
    @if($alumno->matriculas[0]->gradoseccion->id==$id)
    @if($nVueltas==0)
        <?php $nVueltas = 1;?>
    @elseif($nVueltas>375)
        <?php break; ?>
    @else
        <hr>
    @endif
    <div class="row teacherPage">
        <div class="col-md-12">
            <div class="col s12 adjust-img">
            <h4><img src="https://colegiosjb.net/img/indexes/logo.jpg" alt="" height="148" width="148" id="logoboleta"></h4>
            </div>

            <div class="col s12 ajuste-margen">
            <h3 class="text-center" id="titulo">INFORME DE CALIFICACIONES 2017<br></h3>
            <h3 class="text-center" id="titulo">COLEGIO "SAN JUAN BAUTISTA"<br></h3>
            <h3 class="text-center" id="titulo">GRADO {{$alumno->matriculas[0]->gradoseccion->grado->nombre}} {{$alumno->matriculas[0]->gradoseccion->seccion->nombre}}<br></h3>
            </div>

            <div class="container">
                <table class="table" border="1" bordercolor="#0000">
                    <thead>
                    <tr>
                        <td colspan="10"><h3 class="text-center"><strong>ALUMNO/A: {{$alumno->user->nombre}} {{$alumno->user->apellido}}</strong></h3></td>
                    </tr>
                    <tr>
                        <td colspan="10"><h4 class="text-center">PRIMER PERIODO</h4></td>
                    </tr>
                    <tr>
                        <th>Asignaturas</th>
                        <th rowspan="0"><h4 class="Rotate-90 ajustar">Revision de Cuaderno</h4></th>
                        <th rowspan="0"><h4 class="Rotate-90 ajustar">Puntaje</h4></th>
                        <th rowspan="0"><h4 class="Rotate-90 ajustar">Act. Complementarias</h4></th>
                        <th rowspan="0"><h4 class="Rotate-90 ajustar">Puntaje</h4></th>
                        <th rowspan="0"><h4 class="Rotate-90 ajustar">Act. Integradora</h4></th>
                        <th rowspan="0"><h4 class="Rotate-90 ajustar">Puntaje</h4></th>
                        <th rowspan="0"><h4 class="Rotate-90 ajustar">Prueba Objetiva <br> Exámen 30%</h4></th>
                        <th rowspan="0"><h4 class="Rotate-90 ajustar">Puntaje</h4></th>
                        <th rowspan="0"><h4 class="Rotate-90 ajustar">Promedio Periodo</h4></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $promedioGlobal =0?>
                    @foreach($alumno->matriculas[0]->gradoseccion->materiagrados as $materiagrado)
                        @if($materiagrado->idMateria!=14)


                        <tr>
                            <td><h3>{{$materiagrado->materium->nombre}}</h3></td>

                            <?php
                            $rev = false;
                            $com= false;
                            $int= false;
                            $exa= false;
                            $revision=NULL;
                            $complementarias =NULL;
                            $integradoras=NULL;
                            $examen =NULL;?>
                            @foreach($materiagrado->notas as $nota)

                                @if($nota->idMateriaGrado == $materiagrado->id)
                                    @if($nota->idEstudiante == $alumno->id)
                                        @if($nota->idTipoNota==1)

                                            <td><h3 class="text-center">{{$nota->nota}}</h3></td>
                                            <td><h3 class="text-center"><?php
                                                $rev=true;
                                                $revision= round($nota->nota*0.15,1);
                                                echo $revision?></h3></td>

                                        @endif
                                        @if($nota->idTipoNota==2)

                                            <td><h3 class="text-center">{{$nota->nota}}</h3></td>
                                            <td><h3 class="text-center"><?php
                                                $com= true;
                                                $complementarias=round($nota->nota*0.20,1);
                                                echo $complementarias ;?></h3></td>

                                        @endif
                                        @if($nota->idTipoNota==3)

                                            <td><h3 class="text-center">{{$nota->nota}}</h3></td>
                                            <td><h3 class="text-center"><?php
                                                $int= true;
                                                $integradoras =round($nota->nota*0.35,1);
                                                echo $integradoras;?></h3></td>

                                        @endif
                                        @if($nota->idTipoNota==4)

                                            <td><h3 class="text-center">{{$nota->nota}}</h3></td>
                                            <td><h3 class="text-center"><?php
                                                $exa=true;
                                                $examen =round($nota->nota*0.30,1);
                                                echo $examen?></h3></td>

                                        @endif

                                    @endif
                                @endif


                            @endforeach
                            @if($rev==false && $com==false && $int==false && $exa==false)
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td><b>0</b></td>
                            @else
                                <td><h3 class="text-center"><b><?php $promedio = $revision+$complementarias+$integradoras+$examen;
                                        $promedioGlobal=$promedioGlobal+$promedio;
                                        echo $promedio?></b></h3>
                                    @endif

                                </td>
                        </tr>
                        @endif
                    @endforeach
                    <tr>
                        <td><h3>CONDUCTA</h3></td>
                        <td colspan="8"><h4></h4></td>
                        <td><h3 class="text-center">
                            <?php $nvueltas =0?>
                            @foreach($alumno->datosboleta as $boleta)
                                @if($boleta->idPeriodo=1)
                                    <?php $nvueltas++;
                                    $promedioGlobal=$promedioGlobal+$boleta->notaConducta;
                                    ?>
                                    {{$boleta->notaConducta}}
                                @endif
                            @endforeach
                            @if($nvueltas==0)
                                0
                            @endif
                            </h3></td>
                    </tr>
                    <tr>
                        <td colspan="9"><h3>PROMEDIO GLOBAL</h3></td>
                        <td><h3 class="text-center">{!! round(($promedioGlobal/13),1) !!}</h3></td>
                    </tr>
                    <br>
                    <tr>
                        <td colspan="3"><h3>PORCENTAJE DE ASISTENCIAS</h3></td>

                        <td><h3 class="text-center">
                            <?php $nvueltas =0?>
                            @foreach($alumno->datosboleta as $boleta)
                                @if($boleta->idPeriodo=1)
                                    <?php $nvueltas++;
                                    $nasistncia = $boleta->porcentajeAsistencia*10;
                                    ?>
                                    {{$nasistncia}}

                                @endif
                            @endforeach
                            @if($nvueltas==0)
                                --
                            @endif
                            %</h3></td>
                    </tr>
                    </tbody>
                </table>

                <h4>OBSERVACIONES</h4>
                <textarea name="observaciones" id="observacion" cols="170" rows="2">@foreach($alumno->datosboleta as $boleta)@if($boleta->idPeriodo=1){{$boleta->Observaciones}}@endif @endforeach</textarea><br><br><br><br><br>
                <h4>__________________________________</h4>
                <h6 class="docente">DOCENTE RESPONSABLE DE SECCIÓN</h6>
                <h4 class="pull-right director">__________________________________</h4><br>
                <h6 class="pull-right director2">DIRECTOR/A</h6>
            </div>
        </div><!-- /.col -->
    </div><!-- /.col -->
    </div><!-- /.row -->

    <?php $nVueltas++?>

@endif

@endforeach

</body>
</html>