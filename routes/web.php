<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AniosController;
use App\Http\Controllers\pruebaController;

Route::get('/', function () {
    return view('inicio');
})->name('home');

Route::get('/datos', function () {
    return view('datos');
});

Route::get('/avisoLegal', function () {
    return view('avisos.avisoLegal');
})->name('avisoLegal');

Route::get('/politicaPrivacidad', function () {
    return view('avisos.politicaPrivacidad');
})->name('politicaPrivacidad');

Route::get('/politicaCookies', function () {
    return view('avisos.politicaCookies');
})->name('politicaCookies');

Route::get('/creacionEstudio', function () {
    return view('calculoHuella.creacionEstudio');
})->name('cracionEstudio');

Route::get('/creacionHotel', function () {
    return view('insercionHoteles.nuevoHotel');
})->name('nuevoHotel');

Route::get('/hoteles', 'App\Http\Controllers\MostrarHotelesController@ListadoHoteles')->name('hotel');

Route::get('/anios', 'App\Http\Controllers\AniosController@index')->name('anios.index');

Route::get('/datosweb', 'App\Http\Controllers\WebDatosController@listarDatos')->name('datos.index');

//RUTAS PARA GUARDAR DATOS EN LA BD.
use App\Http\Controllers\CreacionUserGratController;
Route::post('/guardar-datos', [CreacionUserGratController::class, 'almacenarDatos'])->name('guardar.datos');

use App\Http\Controllers\CreacionHotelController;
Route::post('/guardarHotel', [CreacionHotelController::class, 'almacenarHotel'])->name('almacenarNuevoHotel');
