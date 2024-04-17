<?php
use App\Models\WebDatos;

$contenido = 1;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Calcula tu huella de carbono</title>
</head>
<body>
    <div class="menu90">
        <img src="{{asset('img/Logo.png')}}" alt="">
        <a href="https://agendaur-cp191.wordpresstemporal.com/greenglobe_bck/">
            <p>{{WebDatos::find($contenido)->cuerpo}}</p>
        </a>
    </div>

    <div class="formulario">
        <h2>Datos de contacto</h2>
        <form action="{{route('guardar.datos')}}" method="POST">
            @csrf
            <div class="datos">
                <input type="text" name="nombre_empresa" required oninput="fadeLabel(this)">
                <label class="fade-label">Nombre empresa</label>
            </div>
            <div class="datos">
                <input type="text" name="num_hoteles" required oninput="fadeLabel(this)">
                <label class="fade-label">Número hoteles</label>
            </div>
                <div class="datos">
                <input type="text" name="nombre_contacto" required oninput="fadeLabel(this)">
                <label class="fade-label">Persona contacto</label>
            </div>
            <div class="datos">
                <input type="text" name="num_telefono" oninput="fadeLabel(this)">
                <label class="fade-label">Número de telefono</label>
            </div>
            <div class="datos">
                <input type="text" name="correo" oninput="fadeLabel(this)">
                <label class="fade-label">Correo electónico</label>
            </div>
            <div class="datos">
                <input type="password" name="password" oninput="fadeLabel(this)">
                <label class="fade-label">Contraseña</label>
            </div>
            <button class="boton_formulario" type="submit">Iniciar</button>
        </form>
    </div>

    <div class="banner2_90">
        <img onclick="cambiarImagen()" src="{{asset('img/banderas/reino-unido.png')}}" alt="">
        <p>Green Globe Sostenibilidad y Proyectos Ambientales es una marca registrada. | <span><a href="/avisoLegal">Aviso legal</a></span> | <a href="/politicaProvacidad">Política de Privacidad</a> | <a href="/politicaCookies">Política de cookies</a></p>
    </div>

    <script src="{{ asset('js/cambiar_bandera.js') }}"></script>
    <script src="{{ asset('js/mostrar_texto.js') }}"></script>
</body>
</html>
