<script>
    $(function () {

        $("#department").select2();
        $("#departmentVivienda").select2();
        $("#municipio").select2();
        $("#municipioVivienda").select2();
        $("#departmentPadre").select2();
        $("#departmentMadre").select2();
        $("#municipioTrabajoPadre").select2();
        $("#municipioMadre").select2();
        $("#departmentResponsable").select2();
        $("#municipioRespobsable").select2();
        $("#gradoCombo").select2();
        $('#dui').mask('000000000');
        $('#nit').mask('00000000000000');
        //$.fn.datepicker.defaults.language = 'es';
        $('#datepicker').datepicker({
            pickTime: false,
            autoclose: true,
            language: 'es',
            cursor: 'pointer',
            maxDate: '-18Y',
            minDate: '-100Y',
            yearRange: '-100'
        });



    });
    function charge() {
        waitingDialog.show('Procesando... ', {progressType: 'info'})
    }
    function stop() {
        waitingDialog.hide();
    }
    function GetMunicipios(dep) {
        //FUNCION QUE DESPLIEGA LA ANIMACIÓN DE CARGANDO
        this.charge();
        $('#municipio').find('option').remove();
        //ELIMINANDO MUNICIPIOS DEL SELECT
        $('#divmun').removeClass('add-Active');
        $('#divmun').addClass('add-Innactive');
        $.ajax({
            // la URL para la petición
            url: '{{route('getMun')}}',
            // la información a enviar
            // (también es posible utilizar una cadena de datos)
            data: {_token: $('input[name=_token]').val(), id: dep.value},
            // especifica si será una petición POST o GET
            type: 'POST',
            // el tipo de información que se espera de respuesta
            dataType: 'json',
            // código a ejecutar si la petición es satisfactoria;
            // la respuesta es pasada como argumento a la función
            success: function (json, textStatus, xhr) {
                waitingDialog.hide();
                console.log('status ' + xhr.status);
                $('#divmun').removeClass('add-Innactive');
                $('#divmun').addClass('add-Active');
                json.forEach(function (entry) {
                    $("#municipio").append('<option value="' + entry.id + '">' + entry.nombre + '</option>');
                });
            },
            // código a ejecutar si la petición falla;
            // son pasados como argumentos a la función
            // el objeto de la petición en crudo y código de estatus de la petición
            error: function (xhr, status) {
                waitingDialog.hide();
                //  this.stop();
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status, json) {
                waitingDialog.hide();
                if (xhr.status == 450) {
                    var response = JSON.parse(xhr.responseText);
                    $('#modalbody').text(response.error);
                    $('#modal').modal('show');
                }
            }
        });
    } function GetMunicipiosVivienda(dep) {
        //FUNCION QUE DESPLIEGA LA ANIMACIÓN DE CARGANDO
        this.charge();
        $('#municipioVivienda').find('option').remove();
        //ELIMINANDO MUNICIPIOS DEL SELECT
        $('#divmunVivienda').removeClass('add-Active');
        $('#divmunVivienda').addClass('add-Innactive');
        $.ajax({
            // la URL para la petición
            url: '{{route('getMun')}}',
            // la información a enviar
            // (también es posible utilizar una cadena de datos)
            data: {_token: $('input[name=_token]').val(), id: dep.value},
            // especifica si será una petición POST o GET
            type: 'POST',
            // el tipo de información que se espera de respuesta
            dataType: 'json',
            // código a ejecutar si la petición es satisfactoria;
            // la respuesta es pasada como argumento a la función
            success: function (json, textStatus, xhr) {
                waitingDialog.hide();
                console.log('status ' + xhr.status);
                $('#divmunVivienda').removeClass('add-Innactive');
                $('#divmunVivienda').addClass('add-Active');
                json.forEach(function (entry) {
                    $("#municipioVivienda").append('<option value="' + entry.id + '">' + entry.nombre + '</option>');
                });
            },
            // código a ejecutar si la petición falla;
            // son pasados como argumentos a la función
            // el objeto de la petición en crudo y código de estatus de la petición
            error: function (xhr, status) {
                waitingDialog.hide();
                //  this.stop();
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status, json) {
                waitingDialog.hide();
                if (xhr.status == 450) {
                    var response = JSON.parse(xhr.responseText);
                    $('#modalbody').text(response.error);
                    $('#modal').modal('show');
                }
            }
        });
    }
    function GetMunicipiosPadre(dep) {
        //FUNCION QUE DESPLIEGA LA ANIMACIÓN DE CARGANDO
        this.charge();
        $('#municipioTrabajoPadre').find('option').remove();
        //ELIMINANDO MUNICIPIOS DEL SELECT
        $('#divmunPadre').removeClass('add-Active');
        $('#divmunPadre').addClass('add-Innactive');
        $.ajax({
            // la URL para la petición
            url: '{{route('getMun')}}',
            // la información a enviar
            // (también es posible utilizar una cadena de datos)
            data: {_token: $('input[name=_token]').val(), id: dep.value},
            // especifica si será una petición POST o GET
            type: 'POST',
            // el tipo de información que se espera de respuesta
            dataType: 'json',
            // código a ejecutar si la petición es satisfactoria;
            // la respuesta es pasada como argumento a la función
            success: function (json, textStatus, xhr) {
                waitingDialog.hide();
                console.log('status ' + xhr.status);
                $('#divmunPadre').removeClass('add-Innactive');
                $('#divmunPadre').addClass('add-Active');
                json.forEach(function (entry) {
                    $("#municipioTrabajoPadre").append('<option value="' + entry.id + '">' + entry.nombre + '</option>');
                });
            },
            // código a ejecutar si la petición falla;
            // son pasados como argumentos a la función
            // el objeto de la petición en crudo y código de estatus de la petición
            error: function (xhr, status) {
                waitingDialog.hide();
                //  this.stop();
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status, json) {
                waitingDialog.hide();
                if (xhr.status == 450) {
                    var response = JSON.parse(xhr.responseText);
                    $('#modalbody').text(response.error);
                    $('#modal').modal('show');
                }
            }
        });
    }
    function GetMunicipiosMadre(dep) {
        //FUNCION QUE DESPLIEGA LA ANIMACIÓN DE CARGANDO
        this.charge();
        $('#municipioMadre').find('option').remove();
        //ELIMINANDO MUNICIPIOS DEL SELECT
        $('#divmunMadre').removeClass('add-Active');
        $('#divmunMadre').addClass('add-Innactive');
        $.ajax({
            // la URL para la petición
            url: '{{route('getMun')}}',
            // la información a enviar
            // (también es posible utilizar una cadena de datos)
            data: {_token: $('input[name=_token]').val(), id: dep.value},
            // especifica si será una petición POST o GET
            type: 'POST',
            // el tipo de información que se espera de respuesta
            dataType: 'json',
            // código a ejecutar si la petición es satisfactoria;
            // la respuesta es pasada como argumento a la función
            success: function (json, textStatus, xhr) {
                waitingDialog.hide();
                console.log('status ' + xhr.status);
                $('#divmunMadre').removeClass('add-Innactive');
                $('#divmunMadre').addClass('add-Active');
                json.forEach(function (entry) {
                    $("#municipioMadre").append('<option value="' + entry.id + '">' + entry.nombre + '</option>');
                });
            },
            // código a ejecutar si la petición falla;
            // son pasados como argumentos a la función
            // el objeto de la petición en crudo y código de estatus de la petición
            error: function (xhr, status) {
                waitingDialog.hide();
                //  this.stop();
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status, json) {
                waitingDialog.hide();
                if (xhr.status == 450) {
                    var response = JSON.parse(xhr.responseText);
                    $('#modalbody').text(response.error);
                    $('#modal').modal('show');
                }
            }
        });
    }function GetMunicipiosResponsable(dep) {
        //FUNCION QUE DESPLIEGA LA ANIMACIÓN DE CARGANDO
        this.charge();
        $('#municipioRespobsable').find('option').remove();
        //ELIMINANDO MUNICIPIOS DEL SELECT
        $('#divmunResponsable').removeClass('add-Active');
        $('#divmunResponsable').addClass('add-Innactive');
        $.ajax({
            // la URL para la petición
            url: '{{route('getMun')}}',
            // la información a enviar
            // (también es posible utilizar una cadena de datos)
            data: {_token: $('input[name=_token]').val(), id: dep.value},
            // especifica si será una petición POST o GET
            type: 'POST',
            // el tipo de información que se espera de respuesta
            dataType: 'json',
            // código a ejecutar si la petición es satisfactoria;
            // la respuesta es pasada como argumento a la función
            success: function (json, textStatus, xhr) {
                waitingDialog.hide();
                console.log('status ' + xhr.status);
                $('#divmunResponsable').removeClass('add-Innactive');
                $('#divmunResponsable').addClass('add-Active');
                json.forEach(function (entry) {
                    $("#municipioRespobsable").append('<option value="' + entry.id + '">' + entry.nombre + '</option>');
                });
            },
            // código a ejecutar si la petición falla;
            // son pasados como argumentos a la función
            // el objeto de la petición en crudo y código de estatus de la petición
            error: function (xhr, status) {
                waitingDialog.hide();
                //  this.stop();
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status, json) {
                waitingDialog.hide();
                if (xhr.status == 450) {
                    var response = JSON.parse(xhr.responseText);
                    $('#modalbody').text(response.error);
                    $('#modal').modal('show');
                }
            }
        });
    }
</script>