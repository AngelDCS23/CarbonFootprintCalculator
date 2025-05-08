<?php

namespace App\Http\Controllers;

use App\Models\ConsumoEnergeticoUsuario;
use App\Models\emisionesDirectas;
use App\Models\EmisionesIndirectasUsuario;
use App\Models\Anio;
use App\Models\EmisionesAño;
use Illuminate\Http\Request;

class ListarEmisionesUsuarios extends Controller{

    public function obtenerEmisionesAnio(){

        $idHotel = session('IdHotel');

        $registroAnio = EmisionesAño::where('fk_idHotel', $idHotel)->first();
        return $registroAnio;
    }

    public function obtenerEmisionesIndirectas(){

        $RegistroAnio = $this->obtenerEmisionesAnio();
        $idRegistroEmiIndi = $RegistroAnio->fk_idEmisionesIndirectas;

        $emisionesIndirectas = EmisionesIndirectasUsuario::where('id', $idRegistroEmiIndi)->first();

        return $emisionesIndirectas;
    }

    public function obtenerEmisionesDirectas(){

        $idRegistroAnio = $this->obtenerEmisionesAnio();
        $idRegistroEmiIndi = $idRegistroAnio->fk_idEmisiones_Directas;

        $emisionesDirectas = emisionesDirectas::where('id', $idRegistroEmiIndi)->first();

        return $emisionesDirectas;
    }

    public function consumoEnergetico(){

        $idRegistro = $this->obtenerEmisionesAnio();
        $idRegistroConsumo = $idRegistro->fk_idconsumoEnergetico;

        $ConsumoEmisiones = ConsumoEnergeticoUsuario::where('id', $idRegistroConsumo)->first();
        return $ConsumoEmisiones;
    }

    public function registroEmisionesAnioUsu(){

        $emiIndi = $this->obtenerEmisionesIndirectas();
        $emiDire = $this->obtenerEmisionesDirectas();
        $consumoEner = $this->consumoEnergetico();

        return response()->json([
            'emiIndi' => $emiIndi,
            'emiDirec' => $emiDire,
            'consumoEner'=> $consumoEner
        ]);

    }
}
