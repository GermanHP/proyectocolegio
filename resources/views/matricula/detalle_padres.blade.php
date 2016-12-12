@extends('layouts.app4')
@section('content')
    <div class="container">
        <div class="panel panel-body">
            <h2>Detalle de los padres</h2>
            <h4>Padres del Alumno: </h4>

            <table class="table table-hover" id="matriculados">
                <thead><h3>Datos del padre</h3></thead>
                <tbody>
                <tr>
                    <td>Nombres</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Numero de DUI</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Profesión</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Lugar de Trabajo</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Teléfono</td>
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
                    <td>Dirección del Trabajo</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Sacramentos</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Estado Civil</td>
                    <td>Detalle</td>
                </tr>
                </tbody>
            </table>
            <table class="table table-hover" id="matriculados">
                <thead><h3>Datos de la Madre</h3></thead>
                <tbody>
                <tr>
                    <td>Nombres</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Numero de DUI</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Profesión</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Lugar de Trabajo</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Teléfono</td>
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
                    <td>Dirección del Trabajo</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Sacramentos</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Estado Civil</td>
                    <td>Detalle</td>
                </tr>
                </tbody>
            </table>
            <table class="table table-hover" id="matriculados">
                <thead><h3>Datos del Responsable</h3></thead>
                <tbody>
                <tr>
                    <td>Nombres</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Numero de DUI</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Profesión</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Lugar de Trabajo</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Teléfono</td>
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
                    <td>Dirección del Trabajo</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Sacramentos</td>
                    <td>Detalle</td>
                </tr>
                <tr>
                    <td>Estado Civil</td>
                    <td>Detalle</td>
                </tr>
                </tbody>
            </table>
            <a href="{{url('/detalle_alumno')}}"><button class="btn btn-primary btn-align">Regresar a Detalles de Alumno</button></a>
            <a href="{{url('/registro')}}"><button class="btn btn-warning btn-align">Regresar a Tabla de Alumnos</button></a>
        </div>
        <script>
            $(document).ready(function () {
                $('#matriculados').DataTable();
            })
        </script>
    </div>
    @stop