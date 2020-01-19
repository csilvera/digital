@extends('inicia')

@section('title', 'Bienvenidos')

@section('sidebar')
<header>
        <div class="fond-menu" title="Menu principal">
            <i class="icon-menu" id="MenuIn"></i>
        </div>
        <i class="LogoP" id="Welcome"></i>
        
        <div class="opc-segund">
            <div class="fond-ajuste" title="Ajuste">
                <i class="icon-ajuste"></i>
            </div>
        </div>
        
        
    </header>
    @parent
@endsection

@section('content')

    <div class="container">
        <div class="cont-left">

            <div class="phone-int">

            </div>

        </div>
        <div class="cont-right">
        
        </div>
    </div>

@endsection