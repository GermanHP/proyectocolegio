@extends('layouts.app3')
@section('content')

    <!-- No header, and the drawer stays open on larger screens (fixed drawer). -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
        <div class="mdl-layout__drawer sideB">
            <span class="mdl-layout-title colormdl"><i class="material-icons">home</i>Menu</span>
            <nav class="mdl-navigation">

                <!-- Contact Chip -->
                <span class="mdl-chip mdl-chip--contact">
                <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">I</span>
                <span class="mdl-chip__text active"><a  href="{{ url('/dash_teacher') }}">Inicio</a></span>
                </span>
                <br>
                <span class="mdl-chip mdl-chip--contact">
                <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">T</span>
                <span class="mdl-chip__text"><a>Tareas</a></span>
                </span>
                <br>
                <span class="mdl-chip mdl-chip--contact">
                <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">C</span>
                <span class="mdl-chip__text"><a  href="">Cursos</a></span>
                </span>
                <br>
                <span class="mdl-chip mdl-chip--contact">
                <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">CA</span>
                <span class="mdl-chip__text"><a  href="">Calendario</a></span>
                </span>
                <br>
                <span class="mdl-chip mdl-chip--contact">
                <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">M</span>
                <span class="mdl-chip__text"><a  href="">Mensajes</a></span>
                </span>
                <br>
                <span class="mdl-chip mdl-chip--contact">
                <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">P</span>
                <span class="mdl-chip__text"><a  href="{{ url('/') }}">Página Principal</a></span>
                </span>

            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content"><!-- Your content goes here --></div>
        </main>
    </div>

    @endsection