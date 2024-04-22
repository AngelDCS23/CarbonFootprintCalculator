@extends('layout.creacionEstudio.layoutEstudio')

@section('title', 'Nuevo Informe')

@section('content')
    <div class="datosEstudio">
        <div class="datosEstudio_90">
            <div class="datosh1">
                <h1>Lista Informes</h1>
                <a href="creacionInforme">
                    <p>Nuevo Informe</p>
                </a>
            </div>            
                @foreach($informes as $informe)
                <div class="lista_hoteles">
                    <div class="hotel_uni">
                        <h2>{{ $informe->nombre }}</h2>
                        <p>Año: {{ $informe->año }}</p>
                        <a href="/hoteles">
                            <img src="{{asset('img/iconos/flecha.png')}}" alt="" onclick="enviarDatos('{{ $informe->nombre }}', '{{ $informe->año }}')">
                        </a>
                    </div>
                </div>
                @endforeach
            
        </div>
    </div>  

    <script src="{{ asset('js/obtenerIdInforme.js') }}"></script>

@endsection