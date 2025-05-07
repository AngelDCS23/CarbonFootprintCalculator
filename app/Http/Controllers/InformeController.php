<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\Models\Informe;
use Illuminate\Support\Facades\Auth;

class InformeController extends Controller{

    public function AlmacenarInforme(Request $request){
    $request->validate([
        'año' => 'integer',
        'nombre' => 'required',
    ]);

    $empresa = session('fk_idEmpresa');
    $usuario = Auth::id();
    \Log::info('asdasdasdasdasdasdadas');
    \Log::info($usuario);
    \Log::info('asdasdasdasdasdasdadas');

    if($empresa == null){
        $empresa = session('idEmpresa');
    }

    $nuveoInforme = Informe::create([
        'nombre' => $request->nombre,
        'fk_idPersona' => $usuario,
        'fk_idEmpresa' => $empresa,
        'año' => $request-> año,
    ]);

    session()->put('usu', $usuario);
    session()->put('empre', $empresa);

    return redirect()->route('listadoInformes');
    }

    public function ListarInformes(Request $request){

        $usuario = Auth::id();
        
        $informes = Informe::where('fk_idPersona', $usuario)->get();
        
        return view ('informes.listadoInformes',compact('informes'));
    }

    public function ObtenerId(Request $request) {

        $nombre = $request->input('nombre');
        $año = $request->input('año');

        $usuario = Auth::id();
        session()->put('añoInforme', $año);

        $informe = Informe::where('nombre', $nombre)
                          ->where('año', $año)
                          ->where('fk_idPersona', $usuario)
                          ->first();

        $idInforme = $informe->id;
        $AñoInforme = $informe->año;

        session()->put('idInforme', $idInforme);
        session()->put('añoInforme', $AñoInforme);
    }
}