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

    <script>
        function enviarDatos(nombre, año) {
        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        fetch('/Obtener', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            body: JSON.stringify({
                nombre: nombre,
                año: año
            })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al enviar los datos: ' + response.statusText);
            }
            console.log("Datos enviados correctamente");
        })
        .catch(error => {
            console.error(error);
        });
    }
    </script>
@endsection