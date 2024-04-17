@extends('layout.creacionEstudio.layoutEstudio')

@section('title', 'Datos')

@section('content')
<div class="datosEstudio">
    <div class="datosEstudio_90">
        <div class="datosh1">
            <h1>Datos</h1>
            <a href="/hoteles">
                <p>Completar</p>
            </a>
        </div>
        <div class="caja_datos">
            <div class="caja_menu_lateral">
                <div class="elemento_caja">
                    <p>Emisiones Directas</p>
                </div>
                <div class="elemento_caja">
                    <p>Emisiones indirectas</p>
                </div>
                <div class="elemento_caja">
                    <p>Otras emisiones</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection