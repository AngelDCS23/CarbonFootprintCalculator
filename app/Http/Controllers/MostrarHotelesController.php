<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hoteles_usuario;
class mostrarHotelesController extends Controller
{
    public function ListadoHoteles(Request $request)
    {
        $idInforme = $request->session()->get('idInforme');
        $hoteles = hoteles_usuario::where('fk_idInforme', $idInforme)->get();
        return view('insercionHoteles.hoteles', compact('hoteles'));
    }
}