<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\Models\Informe;

class InformeController extends Controller{

    public function AlmacenarInforme(Request $request){
    $request->validate([
        'año' => 'integer',
        'nombre' => 'required',
    ]);

    $empresa = session('fk_idEmpresa');
    $usuario = session('idUsuario');

    if($empresa == null && $usuario == null){
        $empresa = session('idEmpresa');
        $usuario = session('idusu');
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

        $usuario = session('idUsuario');

        if($usuario == null){
            $usuario = session('idusu');
        }

        $informes = Informe::where('fk_idPersona', $usuario)->get();

        return view ('informes.listadoInformes',compact('informes'));
    }

    public function ObtenerId(Request $request) {
        $nombre = $request->input('nombre');
        $año = $request->input('año');

        $usuario = session('idUsuario');
        session()->put('añoInforme', $año);

        if ($usuario == null) {
            $usuario = session('idusu');
        }

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