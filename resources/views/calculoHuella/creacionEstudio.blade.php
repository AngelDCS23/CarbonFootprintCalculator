<?php
    use App\Models\empresagrat;

    $empresa = session('num_hoteles');
?>

@extends('layout.creacionEstudio.layoutEstudio')

@section('title', 'Creacion de Estudio')

@section('content')
    <div class="datosEstudio">
        <div class="datosEstudio_90">
            <div class="datosh1">
                <h1>Creación de informe</h1>
                <p>Continuar</p>
            </div>

            <div class="cajas">
                <p>Información:</p>
                <hr>
                <div class="caja_fila">
                    <p class="caja_padding">Nombre</p>
                    <input type="text" name="nombre_estudio" required>
                </div>
                <div class="caja_fila">
                    <p>Descripción</p>
                    <input type="text" name="descripcion_estudio" required>
                </div>

                <p class="caja_padding">Datos:</p>
                <hr>

                <div class="caja_fila">
                    <p class="caja_padding">Año</p>
                    <input type="text" name="anio_estudio" required>
                </div>

                <p class="caja_padding">Hoteles:</p>
                <hr>

                <div class="menu_lateral_hoteles caja_padding">
                    <div class="hoteles"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function generarDivs() {
            var cantidad = parseInt(<?php echo $empresa; ?>);
            var contenedor = document.querySelector('.hoteles');

            // Limpiar el contenido del contenedor antes de agregar nuevos divs
            contenedor.innerHTML = '';

            // Generar los divs y añadirlos al contenedor
            for (var i = 0; i < cantidad; i++) {
                var div = document.createElement('div');
                div.classList.add('div_hoteles'); // Añade una clase para estilizar los divs si es necesario

                //Estructura interna del div
                var divTitulo = document.createElement('div');
                var hr = document.createElement('hr');
                divTitulo.classList.add('div_titulo');
                var titulo = document.createElement('h3');
                titulo.textContent = 'Hotel ' + (i + 1);
                divTitulo.appendChild(titulo);
                divTitulo.appendChild(hr);

                div.appendChild(divTitulo);

                var divFilaCaja = document.createElement('div');
                divFilaCaja.classList.add('caja_fila_hotel');
                var label = document.createElement('label');
                label.textContent = "Nombre";
                divFilaCaja.appendChild(label);
                var input = document.createElement('input');
                divFilaCaja.appendChild(input);

                div.appendChild(divFilaCaja);

                var divFilaCaja2 = document.createElement('div');
                divFilaCaja2.classList.add('caja_fila_hotel');
                var label2 = document.createElement('label');
                label2.textContent = "Dirección";
                divFilaCaja2.appendChild(label2);
                var input2 = document.createElement('input');
                divFilaCaja2.appendChild(input2);

                div.appendChild(divFilaCaja2);

                var divFilaCaja3 = document.createElement('div');
                divFilaCaja3.classList.add('caja_fila_hotel');
                var label3 = document.createElement('label');
                label3.textContent = "Pais";
                divFilaCaja3.appendChild(label3);
                var input3 = document.createElement('input');
                divFilaCaja3.appendChild(input3);

                div.appendChild(divFilaCaja3);

                var divFilaCaja4 = document.createElement('div');
                divFilaCaja4.classList.add("caja_fila_hotel");
                var label4 = document.createElement('label');
                label4.textContent = "Numero de camas";
                divFilaCaja4.appendChild(label4);
                var input4 = document.createElement('input');
                divFilaCaja4.appendChild(input4);

                div.appendChild(divFilaCaja4);

                // Agregar el div al contenedor
                contenedor.appendChild(div);
            }
        }

        generarDivs();
    </script>

@endsection