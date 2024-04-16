<?php

namespace App\Http\Controllers;

use App\Models\WebDatos;
use Illuminate\Http\Request;

class webDatosController extends Controller
{
public function listarDatos()
{
    $datos = WebDatos::all();
    //el compact crea un array asociativo con campo valor.(Como un json "creo").
    return view('webdatos', compact('datos'));
}
}
