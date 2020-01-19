@extends('inicia')

@section('title', 'Bienvenidos')

@section('sidebar')
   <header class="acces">
        <div class="fond-menu" title="Menu principal">
            <i class="icon-menu" id="cl-mn"></i>
        </div>
        <div class="opc-segund">
            
        </div>
    </header>
    @parent
@endsection

@section('content')
        <div class="flex-center position-ref full-height" >
            <div class="content">
                <div class="formar">
                <i class="icologo"></i>
                <form method="post" autocomplete="off" id="IniciaSesion">
                    <div id="DateSesion">
                    	<input type="text" placeholder="Ingrese correo" maxlength="50" onpaste="return false" id="Usuario" class="usernamen clr-ter" autofocus />
                    </div>
                     <a href="{{ url('/recover') }}" class="hasolv text-primary">¿Has olvidado tu contraseña ?<a/>
                    <button type="submit" class="sigue btn btn-primary" id="SiguienteAc">Siguiente</button>
                </form>   
                </div>
          
            </div>
            <div id="Alertas">
            	
            </div>
        </div>
@endsection