<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/creacionInforme', function () {
    return view('informes.nuevoInforme');
})->name('nuevoInforme');

Route::get('/login', function () {
    return view('login.login');
})->name('login');

Route::get('/datosHotel', function () {
    return view('inserccionDatosHotel.inserccionDatos');
})->name('datosHotel');

Route::get('/hoteles', 'App\Http\Controllers\MostrarHotelesController@ListadoHoteles')->name('hotel');

Route::get('/anios', 'App\Http\Controllers\AniosController@index')->name('anios.index');

Route::get('/datosweb', 'App\Http\Controllers\WebDatosController@listarDatos')->name('datos.index');

Route::get('/listadoInformes','App\Http\Controllers\informeController@ListarInformes')->name('listadoInformes');

//RUTAS PARA GUARDAR DATOS EN LA BD
use App\Http\Controllers\CreacionUserGratController;
Route::post('/guardar-datos', [CreacionUserGratController::class, 'almacenarDatos'])->name('guardar.datos');

use App\Http\Controllers\CreacionHotelController;
Route::post('/guardarHotel', [CreacionHotelController::class, 'almacenarHotel'])->name('almacenarNuevoHotel');

use App\Http\Controllers\InformeController;
Route::post('/guardarInforme', [InformeController::class,'AlmacenarInforme'])->name('almacenarInforme');

//RUTAS PARA REALIZAR PETICIONES A LA BD
use App\Http\Controllers\LoginController;
Route::post('/comprobarUsuario',[LoginController::class, 'login'])->name('combrobarUser');

//RUTAS PARA RECIBIR JSON (AJAX)
use App\Http\Controllers\EmisionesDirectasController;
Route::get('/emisiones', [EmisionesDirectasController::class, 'listadoNombres']);

use App\Http\Controllers\ComercializadorasController;
use App\Http\Controllers\GuardarEmisionesDirectasController;

Route::get('/comercializadoras', [ComercializadorasController::class, 'ListarComer']);

use App\Http\Controllers\subtiposedController;
Route::get('/subtipos', [SubtiposedController::class, 'listadoSubtipos']);
Route::post('/subtipos', [SubtiposedController::class, 'listadoSubtipos']);

//Route::get('/Obtener',[InformeController::class,'ObtenerId']);
Route::post('/Obtener',[InformeController::class,'ObtenerId']);

use App\Http\Controllers\ObtenerIdHotelController;

Route::get('/ObtenerHotel', [ObtenerIdHotelController::class,'ObtenerIdHotel']);
Route::post('/ObtenerHotel', [ObtenerIdHotelController::class,'ObtenerIdHotel']);

Route::post('/guardarEmiDirect', [GuardarEmisionesDirectasController::class,'almacenarEMIDirectas'])->name('guardarEmisionDirec');
Route::get('/guardarEmiDirect', [GuardarEmisionesDirectasController::class,'almacenarEMIDirectas']);

/*PRUEBAS*/

Route::post('/envioEmiDirectas', [GuardarEmisionesDirectasController::class,'almacenarEMIDirectas'])->name('guardarEmisionDirec');

Route::get('/prueba', function () {
    return view('prueba');
})->name('prueba');