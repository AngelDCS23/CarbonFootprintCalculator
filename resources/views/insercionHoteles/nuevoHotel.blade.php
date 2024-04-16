@extends('layout.creacionEstudio.layoutEstudio')

@section('title', 'Añadir Hotel')

@section('content')
<div class="datosEstudio_90"> 
    <div class="formulario_hotel">
        <h2>Hotel 1</h2>
        <form action="{{route('almacenarNuevoHotel')}}" method="POST">
            @csrf
            <div class="datos_hotel">
                <input type="text" name="Nombre" required oninput="fadeLabel(this)">
                <label class="fade-label">Nombre</label>
            </div>
            <div class="datos_hotel">
                <input type="text" name="Direccion" required oninput="fadeLabel(this)">
                <label class="fade-label">Direccion</label>
            </div>
            <div class="datos_hotel">
                <input type="text" name="Pais" required oninput="fadeLabel(this)">
                <label class="fade-label">Pais</label>
            </div>
            <div class="datos_hotel">
                <input type="text" name="Numero_camas" required oninput="fadeLabel(this)">
                <label class="fade-label">Numero de camas</label>
            </div>
            <button class="boton_formulario" type="submit">Guardar Hotel</button>
        </form>
    </div>

</div>

    <script src="{{ asset('js/mostrar_texto.js') }}"></script>
@endsection