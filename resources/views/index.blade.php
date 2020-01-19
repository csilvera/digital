<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Perforosven s.a. - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ url('img/icologo.ico') }}" rel="icon" />
        <link rel="stylesheet" href="{{ url('css/all.css') }}">
         <!--<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">-->
        <link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ url('css/general.css') }}" rel="stylesheet" />
        <link href="{{ url('css/style.css') }}" rel="stylesheet" />
        <link href="{{ url('css/style-total.css') }}" rel="stylesheet" />
        <link href="{{ url('css/form-prefacturas.css') }}" rel="stylesheet" />
        <!--<link href="{{ url('css/w3.css') }}" rel="stylesheet" />-->
        
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
                <div class="icon-ini"></div>
                <a class="clickmen clr-ter" href="{{ url('/') }}">Inicia sesión</a>
                </li>
                <li class="menuder">
                <div class="icon-doc"></div>
                <a class="clickmen clr-ter" href="{{ url('/') }}">Revenue</a>
                </li>
                <li class="menuder">
                <div class="icon-ws"></div>
                <a class="clickmen clr-ter" href="{{ url('https://web.whatsapp.com/send?phone=584262026075&text=Hola+necesito+ayuda%2Fasistencia&source&data') }}" target="_blank">Soporte</a>
                </li>
                <li class="menuder">
                <div class="icon-vs"></div>
                <a class="clickmen clr-ter" href="{{ route('print') }}">Versión</a>
                </li>
            </ul>
        </div>
        <div class="opc-accede">
              
                   <div class="opc-fond">
                        <i class="ico-contrast"></i>
                    </div>
                    <div class="opc-fond">
                        <i class="ico-sound"></i>
                    </div>
        </div>
		<div id="AlertBottom">
			
		</div>
    </body>
</html>
<script type="text/javascript" src="{{ url('js/jquery/jquery.js') }}"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/sweetalert.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ url('js/index.js') }}"></script>