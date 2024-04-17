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
        <div class="menu_derecha">
            <div class="imagen_menu">
                <a href="/login">
                    <img class="menu_derecha_img" src="{{asset('img/iconos/usuario_Login.png')}}" alt="">
                </a>
            </div>
            <div class="texto_menu">
                <a href="https://agendaur-cp191.wordpresstemporal.com/greenglobe_bck/">
                    <p>{{WebDatos::find($contenido)->cuerpo}}</p>
                </a>
            </div>
            
        </div>
        
    </div>
   
    <div class="banner1_40">
        <h1>{{WebDatos::find($contenido)->titulos}}</h1>
        <a href="/datos" class="banner1_boton">
            <p>{{WebDatos::find($contenido)->boton}}</p>
        </a>
        <p class="banner1_sub">{{WebDatos::find($contenido)->subtitulos}}</p>
    </div>

    @include('layout.footer')

    <script src="{{ asset('js/cambiar_bandera.js') }}"></script>
    <script>

    </script>
</body>
</html>

