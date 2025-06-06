<?php
use App\Models\WebDatos;

$contenido = 1;

?>

@extends('layout.layout')

@section('title', 'Login')

@section('content')
<div class="formulario">
    <h2>Inicio de Sesión</h2>
    
    <form  action="{{route('combrobarUser')}}" method="POST">
        @csrf
        <div class="datos">
            <input type="email" name="email" required oninput="fadeLabel(this)">
            <label class="fade-label">Correo Electrónico</label>
        </div>
        <div class="datos">
            <input type="password" name="password" required oninput="fadeLabel(this)">
            <label class="fade-label">Contraseña</label>
        </div>
        <input type="checkbox" name="remember_me" id="remember_me">
        <label for="recordar">Recuérdame</label>
        <button class="boton_formulario" type="submit">Iniciar</button>
    </form>
</div>

<script src="{{ asset('js/mostrar_texto.js') }}"></script>
@endsection