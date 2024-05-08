<?php

namespace App\Http\Controllers;

use App\Models\EmisionesIndirectasDatos;
use App\Models\Anio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ListadoEmisIndiController extends Controller{

    public function ObtenerIdAño($año){
        $anio = anio::where('Anio', $año)->first();
        if ($anio) {
            return $anio->id;
        } else {
            return "ESTA VACIO";
        }
    }

    public function listarEmiIndirectas(){
        $año = session('añoInforme');
        $idaño = $this->ObtenerIdAño($año);
        $emiIndirect = EmisionesIndirectasDatos::where("fk_idAño", $idaño)->get('nombre');
        return response()->json($emiIndirect);
    }
}