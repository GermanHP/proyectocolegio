@extends('layouts.app')
@section('content')
    <div class="panel panel-primary panel-align">
        <!-- Default panel contents -->
        <div class="panel-heading"><h4>Formulario de matrícula en línea.</h4>
        </div>
        <div class="panel-body">
            <p><h6>A continuación se detallan los pasos para efectuar la matrícula en línea. El proceso de
                inscripción está disponible para todo público, sin embargo, la institución se reserva el derecho de
                admisión del estudiante aspirante.</h6></p>
        </div>

        <!-- Datos Alumno -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Datos del Alumno.</h3>
            </div>
            <div class="panel-body">
                <div class="input-group margin">
                    <span class="input-group-addon" id="basic-addon1">Nombres:</span>
                    <input type="text" class="form-control" placeholder="Nombres" aria-describedby="basic-addon1">
                </div>

                <div class="input-group margin">
                    <span class="input-group-addon" id="basic-addon1">Apellidos:</span>
                    <input type="text" class="form-control" placeholder="Apellidos" aria-describedby="basic-addon1">
                </div>

                <div class="input-group margin">
                    <span class="input-group-addon" id="basic-addon1">Fecha de nacimiento</span>
                    <?php echo Form::date('name', \Carbon\Carbon::RFC2822);?>
                </div>

                <div class="input-group margin">
                    <span class="input-group-addon" id="basic-addon1">Teléfono</span>
                    <input type="tel" class="form-control" placeholder="Número de teléfono" aria-describedby="basic-addon1">
                </div>

                <div class="input-group margin">
                    <span class="input-group-addon" id="basic-addon1">Dirección</span>
                    <input type="text" class="form-control" placeholder="Dirección" aria-describedby="basic-addon1">
                </div>

                <div class="input-group margin">
                    <span class="input-group-addon" id="basic-addon1">E-mail</span>
                    <input type="email" class="form-control" placeholder="Correo electrónico" aria-describedby="basic-addon1">
                </div>
            </div>

            <!-- Datos Padre -->

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Datos del Padre.</h3>
                </div>
                <div class="panel-body">
                    <div class="input-group margin">
                        <span class="input-group-addon" id="basic-addon1">Nombres:</span>
                        <input type="text" class="form-control" placeholder="Nombres" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group margin">
                        <span class="input-group-addon" id="basic-addon1">Apellidos:</span>
                        <input type="text" class="form-control" placeholder="Apellidos" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group margin">
                        <span class="input-group-addon" id="basic-addon1">Fecha de nacimiento:</span>
                        <?php echo Form::date('name', \Carbon\Carbon::RFC2822);?>
                    </div>

                    <div class="input-group margin">
                        <span class="input-group-addon" id="basic-addon1">Teléfono:</span>
                        <input type="tel" class="form-control" placeholder="Número de teléfono" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group margin">
                        <span class="input-group-addon" id="basic-addon1">Dirección:</span>
                        <input type="text" class="form-control" placeholder="Dirección" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group margin">
                        <span class="input-group-addon" id="basic-addon1">E-mail:</span>
                        <input type="email" class="form-control" placeholder="Correo electrónico" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group margin">
                        <span class="input-group-addon" id="basic-addon1">Profesión:</span>
                        <input type="text" class="form-control" placeholder="Profesión" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group margin">
                        <span class="input-group-addon" id="basic-addon1">Lugar de trabajo:</span>
                        <input type="text" class="form-control" placeholder="Escriba aquí..." aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group margin">
                        <span class="input-group-addon" id="basic-addon1">Dirección del trabajo:</span>
                        <input type="text" class="form-control" placeholder="Escriba aquí..." aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- Datos Madre -->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Datos del la Madre.</h3>
                    </div>
                    <div class="panel-body">
                        <div class="input-group margin">
                            <span class="input-group-addon" id="basic-addon1">Nombres:</span>
                            <input type="text" class="form-control" placeholder="Nombres" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group margin">
                            <span class="input-group-addon" id="basic-addon1">Apellidos:</span>
                            <input type="text" class="form-control" placeholder="Apellidos" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group margin">
                            <span class="input-group-addon" id="basic-addon1">Fecha de nacimiento:</span>
                            <?php echo Form::date('name', \Carbon\Carbon::RFC2822);?>
                        </div>

                        <div class="input-group margin">
                            <span class="input-group-addon" id="basic-addon1">Teléfono:</span>
                            <input type="tel" class="form-control" placeholder="Número de teléfono" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group margin">
                            <span class="input-group-addon" id="basic-addon1">Dirección:</span>
                            <input type="text" class="form-control" placeholder="Dirección" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group margin">
                            <span class="input-group-addon" id="basic-addon1">E-mail:</span>
                            <input type="email" class="form-control" placeholder="Correo electrónico" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group margin">
                            <span class="input-group-addon" id="basic-addon1">Profesión:</span>
                            <input type="text" class="form-control" placeholder="Profesión" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group margin">
                            <span class="input-group-addon" id="basic-addon1">Lugar de trabajo:</span>
                            <input type="text" class="form-control" placeholder="Escriba aquí..." aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group margin">
                            <span class="input-group-addon" id="basic-addon1">Dirección del trabajo:</span>
                            <input type="text" class="form-control" placeholder="Escriba aquí..." aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <!-- Datos Encargado -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Datos del Tutor/a o Encargado.</h3>
                        </div>
                        <div class="panel-body">
                            <div class="input-group margin">
                                <span class="input-group-addon" id="basic-addon1">Nombres:</span>
                                <input type="text" class="form-control" placeholder="Nombres" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group margin">
                                <span class="input-group-addon" id="basic-addon1">Apellidos:</span>
                                <input type="text" class="form-control" placeholder="Apellidos" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group margin">
                                <span class="input-group-addon" id="basic-addon1">E-mail:</span>
                                <input type="email" class="form-control" placeholder="Escriba aquí..." aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group margin">
                                <span class="input-group-addon" id="basic-addon1">Teléfono:</span>
                                <input type="tel" class="form-control" placeholder="Escriba aquí..." aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" id="myButton" data-loading-text="Enviando..." class="btn btn-primary btn-align" autocomplete="off">
                Enviar
            </button>

            <script>
                $('#myButton').on('click', function () {
                    var $btn = $(this).button('loading')
                    // lógica
                    $btn.button('reset')
                })
            </script>
        </div>
    </div>
@endsection()