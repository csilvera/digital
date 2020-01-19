@extends('inicia')

@section('title', 'Bienvenidos')

@section('sidebar')
   <header class="acces">
        <div class="fond-menu" title="Menu principal">
            <i class="icon-menu" id="cl-mn"></i>
        </div>
        <div class="opc-segund">
            <!--<div class="fond-return" title="Refrescar">
                <i class="icon-reload"></i>
            </div>-->
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
                     <input type="text" placeholder="Ingrese usuario" maxlength="50" onpaste="return false" class="usernamen clr-ter" autofocus />
                    <a href="{{ url('/recover') }}" class="hasolv text-primary">¿Has olvidado tus datos ?<a/>
                    <!--<div class="usernapoin">
                        <i class="ico-user"></i>
                         <div class="text-poin">cesar.e.silvera@gmail.com</div>
                    </div>
                    <input placeholder="Ingrese contraseña" type="password" maxlength="15" onpaste="return false" class="passw clr-ter" autofocus/>
                    <div class="mostrar"><i class="ico-ojo"></i></div>
                    <a href="{{ url('/recuperar') }}<?php echo "/".$lang ?> " class="hasolv text-primary">¿Has olvidado tu contraseña ?<a/>
                    <button type="button" class="atras btn btn-danger" id="ReturnAc">Atras</button>-->
                    <button type="button" class="sigue btn btn-primary" id="SiguienteAc">Siguiente</button>
                </form>   
                </div>
                <!--<div class="conexion alert alert-danger">
                   <i class="ico-excla"></i>
                   <div class="text-inter">No hay conexión a internet</div>
                </div>
                <div class="conexion alert alert-success">
                   <i class="ico-success"></i>
                   <div class="text-inter">No hay conexión a internet</div>
                </div>
                <div class="conexion alert alert-danger">
                   <i class="ico-excla"></i>
                   <div class="text-inter">Sitio en mantenmiento</div>
                </div>-->
            </div>
        </div>
@endsection