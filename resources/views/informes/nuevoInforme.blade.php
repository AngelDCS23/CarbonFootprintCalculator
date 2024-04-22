@extends('layout.creacionEstudio.layoutEstudio')

@section('title', 'Nuevo Informe')

@section('content')
<div class="datosEstudio_90"> 
    <div class="formulario_hotel">
        <h2>Nuevo Informe</h2>
        <form action="{{route('almacenarInforme')}}" method="POST">
            @csrf
            <div class="datos_hotel">
                <input type="text" name="nombre" required oninput="fadeLabel(this)">
                <label class="fade-label">Nombre</label>
            </div>
            <div class="datos_hotel">
                <input type="number" name="año" required oninput="fadeLabel(this)">
                <label class="fade-label">Año</label>
            </div>
            <button class="boton_formulario" type="submit">Guardar Informe</button>
        </form>
    </div>

</div>

    <script src="{{ asset('js/mostrar_texto.js') }}"></script>
@endsection