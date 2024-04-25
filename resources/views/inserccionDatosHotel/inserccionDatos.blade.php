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
        <div class="caja_datos" id="emisiones_directas">
            <div class="caja_menu_lateral">
                <div class="elemento_caja" id="emi_directas" onclick="mostrarContenido('directas', this)">
                    <h3>Emisiones Directas</h3>
                </div>
                <div class="elemento_caja" id="emi_indirecta" onclick="mostrarContenido('indirectas', this)">
                    <h3>Consumo energético</h3>
                </div>
                <div class="elemento_caja" id="otras_emisiones" onclick="mostrarContenido('otras', this)">
                    <h3>Emisiones indirectas</h3>
                </div>
            </div>

            <div class="caja_datos_hotel" id="contenido_cambiante">
                <div id="contenido_directas" style="display: none">
                    <div class="caja_datos_opciones">
                        <button type="submit" class="btn" onclick="mostrarPopup()">Añadir <span><img src="{{asset('img/iconos/añadir.png')}}" alt=""></span></button>
                    </div>
    
                    <div class="caja_datos_menu">
                        <p>Tipo</p>
                        <p>Nombre</p>
                        <p>Cantidad</p>
                        <p>Unidad</p>
                    </div>
                    <div class="datos_usuario"></div>
                </div>

                <div id="contenido_indirectas" style="display: none">
                    <div class="caja_datos_opciones" >
                        <button style="display: none" type="submit" class="btn" onclick="mostrarPopup()">Añadir <span><img src="{{asset('img/iconos/añadir.png')}}" alt=""></span></button>
                    </div>
                    <div class="caja_datos_menu">
                        <p>Comercializadora</p>
                        <p>Cantidad</p>
                        <p>Unidad</p>
                        <p>Impacto ambiental (CO2e)</p>
                    </div>
                    <div class="datos_usuario">   
                        <select name="comercializadoras" id="comerci">
                        
                        </select>   
                        <input type="number" id="cantidad">
                        <input type="text" id="unidad" value="kwh" readonly>
                        <input type="text">
                    </div>
                </div>

                <div id="contenido_otras" style="display: none">
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
            <img onclick="OcultarPopup(); LimpiarSelectores()" src="{{asset('img/iconos/cerrar.png')}}" alt="">
        </div>

        <div class="cuerpo_popup">
            <h3>Información</h3>
            <hr>

            <form action="POST">
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
                    <input type="text" id="cantidadAña" required>
                    
                </div>
    
                <div class="fila_datos_popup">
                    <label>Unidad</label>
                    <input type="text" id="unidadAña">
                </div>
            </form>
        </div>
        {{-- LimpiarSelectores();  TENGO QUE AÑADIR ESTO AL ONCLICK CUANDO FUNCIONE LO OTRO--}}
        <button type="button" onclick="OcultarPopup(); crearRegistro()" class="btn">Añadir</button>
    </div>
</div>

<script src="{{ asset('js/selector_menu.js') }}"></script>
<script src="{{ asset('js/popupHotel.js') }}"></script>
<script src="{{ asset('js/listar_nombres.js') }}"></script>
<script src="{{ asset('js/listar_comercializadoras.js') }}"></script>
<script src="{{ asset('js/limpiar_selectores.js') }}"></script>
<script src="{{ asset('js/obtenerRegistrosYAñadirLista.js') }}"></script>

@endsection