<?php

namespace App\Http\Controllers;

use App\Models\EmisionesIndirectasUsuario;
use Illuminate\Http\Request;
use App\Models\emisionesDirectas;
use App\Models\CombustibleMaquinariaDato;
use App\Models\EmisionFugitivaGasProduccion;
use App\Models\ConsumoMaquinariaUsuario;
use App\Models\ConsumoVehiculoUsuario;
use App\Models\EmisionDirecta;
use App\Models\EmisionesAño;
use App\Models\hoteles_usuario;
use Illuminate\Support\Facades\Log;

class GuardarEmisionesDirectasController extends Controller{
    public function ObtenerReferencia(){
        $idHotel = session()->get("IdHotel");
        //Log:info($idHotel);
        $idEmiAño = EmisionesAño::where('fk_idHotel', $idHotel)->value('id');
        //Log:info($idEmiAño);
        $idEmiIndirec = EmisionesAño::where('fk_idHotel', $idHotel)->value('fk_idEmisionesIndirectas');
        //Log:info($idEmiIndirec);
        $idEmiDirec = EmisionesAño::where('fk_idHotel', $idHotel)->value('fk_idEmisiones_Directas');
        //Log:info($idEmiDirec);
        $idEmiConsumoVehi = ConsumoVehiculoUsuario::where('fk_idEmisiones_Directas', $idEmiDirec)->value('id');
        //Log:info($idEmiConsumoVehi);
        $idEmiFugitivas = EmisionDirecta::where('fk_idEmisiones_Fugitivas', $idEmiDirec)->value('id');
        //Log:info($idEmiFugitivas);

    }
    // public function ObtenerIdEmiAño(){
    //     $idHotel = session()->get("idHotel");
    //     Log::info('id Hotel:'. $idHotel);
    //     $idEmiAño = EmisionesAño::where('fk_idHotel', $idHotel)->get('id');
    //     Log::info($idEmiAño);
    //     return $idEmiAño;
    // }
    // public function ObtenerIdEmiIndirec(){
    //     $idEmiAño = $this->ObtenerIdEmiAño();
    //     Log::info('id Emision por año'. $idEmiAño);
    //     $idEmiIndirec = EmisionesIndirectasUsuario::where('id', $idEmiAño)->get('id');
    //     return $idEmiIndirec;
    // }
    // public function ObtenerEmiDirec(){
    //     $idEmiAño = $this->ObtenerIdEmiAño();
    //     $idEmiDirec = emisionesDirectas::where('id', $idEmiAño)->get();
    //     return $idEmiDirec;
    // }
    // public function ObtenerConsumoVehi(){
    //     $idEmiDirect = $this->ObtenerEmiDirec();
    //     $idEmiConsumoVehi = ConsumoVehiculoUsuario::where('fk_idEmisiones_Directas', $idEmiDirect)->get();
    //     return $idEmiConsumoVehi;
    // }
    // public function ObtenerEmiFugitivas(){
    //     $idEmiDirect = $this->ObtenerEmiDirec();
    //     $idEmiFugitivas = emisionesDirectas::where('fk_idEmisiones_Fugitivas', $idEmiDirect)->get();
    //     return $idEmiFugitivas; 
    // }
    // public function almacenarEMIDirectas(request $request){
    //     $tipo = $request->tipo;
    //     $subtipo = $request->subtipo;
    //     $cantidad = $request->cantidad;
    //     if($tipo = 'Consumo grupo electrógeno'){
            
    //     }
    // }
    
}

