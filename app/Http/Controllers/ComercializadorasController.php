<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comercializadoras;
use App\Models\anio;

class ComercializadorasController extends Controller{

    public function ObtenerIdAño($año){
        $anio = anio::where('Anio', $año)->first();

        //Comprobante de que la vriable no está vacía.
        if ($anio) {
            return $anio->id;
        } else {
            return "ESTA VACIO";
        }
    }

    public function ListarComer(Request $request){
        $año = session('añoInforme');
        $idaño = $this->ObtenerIdAño($año);
        $comercializazdoras = comercializadoras::where("fk_idAño", $idaño)->get();

        return response()-> json($comercializazdoras);
    }
}