<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Digitales. - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ url('img/icologo.ico') }}" rel="icon" />
        <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ url('css/general.css') }}" rel="stylesheet" />
        <link href="{{ url('css/style.css') }}" rel="stylesheet" />
    </head>
    <body>
        @section('sidebar')
            
        @show

        <div>
            @yield('content')
        </div>
        <div class="Despl-menu">
            <ul class="menuin">
                <li class="menuder">
                <div class="icon-check"></div>
                <a class="clickmen clr-ter" href="{{ url('/') }}">Inicia sesión</a>
                </li>
                <li class="menuder">
                <div class="icon-check"></div>
                <a class="clickmen clr-ter" href="{{ url('/registrate') }}">Registrate</a>
                </li>
                <li class="menuder">
                <div class="icon-check"></div>
                <a class="clickmen clr-ter" href="">Versión</a>
                </li>
            </ul>
        </div>
    </body>
</html>
<script type="text/javascript" src="{{ url('js/jquery/jquery.js') }}"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/index.js') }}"></script>