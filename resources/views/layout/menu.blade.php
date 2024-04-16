<?php
use App\Models\WebDatos;

$contenido = 1;

?>

<div class="menu90">
    <img src="{{asset('img/Logo.png')}}" alt="">
    <a href="https://agendaur-cp191.wordpresstemporal.com/greenglobe_bck/">
        <p>{{WebDatos::find($contenido)->cuerpo}}</p>
    </a>
</div>