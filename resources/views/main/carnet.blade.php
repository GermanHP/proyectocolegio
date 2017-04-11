@extends('layouts.app6')
@section('content')

    <div class="container">
        <!-- Square card -->
        <style>
            .demo-card-square.mdl-card {
                width: 450px;
                height: 550px;
            }
            .demo-card-square > .mdl-card__title {
                color: #fff;
                background:
                        url('../img/indexes/logo.jpg') bottom right 15% no-repeat #46B6AC;
                height: 50px;
                width: 50px;
            }
        </style>

        <div class="demo-card-square mdl-card mdl-shadow--2dp">
           
            <div class="mdl-card__supporting-text">
                <img src="img/indexes/logo.jpg" alt="" height="75" width="75">
                <h4 class="">Colegio San Juan Bautista</h4>
            </div>
            <div class="mdl-card__actions mdl-card--border">
               <h4>2017</h4>
            </div>
        </div>

    </div>

@stop