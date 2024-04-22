@extends('layout.creacionEstudio.layoutEstudio')

@section('title', 'Datos')

@section('content')
<div class="datosEstudio">
    <div class="datosEstudio_90">
        <div class="datosh1">
            <h1>Datos</h1>
            <a href="/hoteles" class="margin">
                <p>Completar</p>
            </a>
        </div>
        <div class="caja_datos">
            <div class="caja_menu_lateral">
                <div class="elemento_caja" id="emi" onclick="marcarEmi()">
                    <h3>Emisiones Directas</h3>
                </div>
                <div class="elemento_caja" id="emi">
                    <h3>Emisiones indirectas</h3>
                </div>
                <div class="elemento_caja" id="emi">
                    <h3>Otras emisiones</h3>
                </div>
            </div>
            <div class="caja_datos_hotel">

                <div class="caja_datos_opciones">
                    <button type="submit" class="btn" onclick="mostrarPopup()">Añadir <span><img src="{{asset('img/iconos/añadir.png')}}" alt=""></span></button>
                </div>

                <div class="caja_datos_menu">
                    <p>Nombre</p>
                    <p>Cantidad</p>
                    <p>Unidad</p>
                    <p>Impacto ambiental (CO2e)</p>
                </div>

                <div class="datos_usuario">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="popup" id="popup">
        <div class="barra_superior_popup">
            <p>Añadir</p>
            <img onclick="OcultarPopup()" src="{{asset('img/iconos/cerrar.png')}}" alt="">
        </div>

        <div class="cuerpo_popup">
            <h3>Información</h3>
            <hr>

            <div class="fila_datos_popup">
                <label>Tipo:</label>
                <select id="tipo" name="tipo">
                    
                </select>
            </div>
            <div class="fila_datos_popup">
                <label>Subtipo</label>
                <select id="subtipo" name="subtipo">

                </select>
            </div>

            <h3>Información</h3>
            <hr>

            <div class="fila_datos_popup">
                <label>Cantidad</label>
                <input type="text">
            </div>
            <div class="fila_datos_popup">
                <label>Unidad</label>
                <input type="text">
            </div>

        </div>
        <button type="button" onclick="OcultarPopup()" class="">Cerrar</button>
    </div>
</div>

<script src="{{ asset('js/popupHotel.js') }}"></script>
<script src="{{ asset('js/listar_nombres.js') }}"></script>
<script src="{{ asset('js/tipo_emi.js') }}"></script>


@endsection