<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hoteles_usuario;
class mostrarHotelesController extends Controller
{
    public function ListadoHoteles(Request $request)
    {
        $idHotel = $request->session()->get('fk_idEmpresa');
        $hoteles = hoteles_usuario::where('fk_idempresa', $idHotel)->get();
        return view('insercionHoteles.hoteles', compact('hoteles'));
    }
}