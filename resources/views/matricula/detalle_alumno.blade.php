@extends('layouts.app4')
@section('content')
    <div class="container">
        <div class="panel panel-body">
        <h2>Detalle del Alumno</h2>
        <h4>Nombre del Alumno</h4>

        <table class="table table-hover" id="matriculados">
            <tbody>
            <thead></thead>
            <tr>
                <td>Lugar de Nacimiento</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Departamento</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Municipio</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Grado que cursa</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Sacramentos</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Estudió Parvularia</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Dirección de residencia</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Departamento</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Municipio</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Padece Alguna Enfermedad</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Nombre de la Enfermedad</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Tratamiento Médico</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>El/La Estudiante se Retira a la Hora de Salida:</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Nombre de la Persona Autorizada</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>En Caso de Emergencia comunicarse con:</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Último Grado Cursado</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Centro Escolar Donde lo Cursó</td>
                <td>Detalle</td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td>Detalle</td>
            </tr>
            </tbody>
        </table>
            <a href="{{url('/registro')}}"><button class="btn btn-primary btn-align">Regresar</button></a>
        </div>
        <script>
            $(document).ready(function () {
                $('#matriculados').DataTable();
            })
        </script>
    </div>
    @stop