<?php

namespace App\Http\Controllers;

use App\Models\EmisionesIndirectasDatos;
use App\Models\Anio;
use Illuminate\Http\Request;

class ListadoEmisIndiController extends Controller{

    // Actualmente no necesitamos que las emisiones indiretas se filtren por el año
    // public function ObtenerIdAño($año){
    //     $anio = anio::where('Anio', $año)->first();
    //     if ($anio) {
    //         return $anio->id;
    //     } else {
    //         return "ESTA VACIO";
    //     }
    // }

    public function listarEmiIndirectas(){
        
        // En caso de necesitar que filtre por el año desactivar los comentarios
        // $año = session('añoInforme');
        // $idaño = $this->ObtenerIdAño($año);
        //$emiIndirect = EmisionesIndirectasDatos::where("fk_idAño", $idaño)->get('nombre');

        $emiIndirect = EmisionesIndirectasDatos::get('nombre');
        return response()->json($emiIndirect);
    }
}
