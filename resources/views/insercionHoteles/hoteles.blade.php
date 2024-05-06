@extends('layout.creacionEstudio.layoutEstudio')

@section('title', 'Hoteles')

@section('content')
    <div class="datosEstudio">
        <div class="datosEstudio_90">
            <div class="datosh1">
                <h1>Lista Hoteles</h1>
                <a href="/creacionHotel">
                    <p>Añadir Hotel</p>
                </a>
            </div>            
                @foreach($hoteles as $hotel)
                <div class="lista_hoteles">
                    <div class="hotel_uni">
                        <h2>{{ $hotel->Nombre }}</h2>
                        <p>Dirección: {{ $hotel->Direccion }}</p>
                        <p>País: {{ $hotel->Pais }}</p>
                        <a href="/datosHotel">
                            <img src="{{asset('img/iconos/flecha.png')}}" alt="" onclick="enviarIdHotel('{{$hotel->id}}')">
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>

    <script src="{{ asset('js/obtenerIdHotel.js') }}"></script>
@endsection
