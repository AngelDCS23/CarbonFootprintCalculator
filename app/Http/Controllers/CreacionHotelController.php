<?php

namespace App\Http\Controllers;

use App\Models\ConsumoVehiculoUsuario;
use Illuminate\Http\Request;
use App\Models\hoteles_usuario;
use App\Models\EmpresaGrat;
use App\Models\EmisionesAño;
use App\Models\EmisionDirecta;
use App\Models\EmisionesIndirectasUsuario;
use App\Models\EmisionFugitivaGasProduccion;
use App\Models\Informe;

class CreacionHotelController extends Controller{
    public function almacenarHotel(Request $request){
        $request->validate([
            'Nombre' => 'required|string|max:45',
            'Direccion' => 'required|string|max:200',
            'Pais' => 'required|string|max:45',
            'Numero_camas' => 'required|integer',
        ]);

        $empresa = EmpresaGrat::find($request->session()->get('idEmpresa'));
        $informe = session('idInforme');

        $hotel = hoteles_usuario::create([
            'Nombre' => $request -> Nombre,
            'Direccion' => $request -> Direccion,
            'Pais' => $request -> Pais,
            'Numero_camas' => $request -> Numero_camas,
            'fk_idEmpresa' => $empresa->id,
            'fk_idInforme' => $informe,
        ]);

        $emisionesFugitivas = EmisionFugitivaGasProduccion::create([]);

        $emisionesIndirectas = EmisionesIndirectasUsuario::create([]);

        $emisionDirecta = EmisionDirecta::create([
            'fk_idEmisiones_Fugitivas' => $emisionesFugitivas->id,            
        ]);

        $consumoVehiculos = ConsumoVehiculoUsuario::create([
            'fk_idEmisiones_Directas' => $emisionDirecta->id,
        ]);

        $AñoInforme = $request->session()->get('añoInforme');

        $emisionAño = EmisionesAño::create([
            'fk_idHotel' => $hotel -> id,
            'fk_idEmisiones_Directas' => $emisionDirecta -> id,    
            'fk_idEmisionesIndirectas' => $emisionesIndirectas -> id,
            'año' => $AñoInforme,
        ]);

        $hotel->empresa()->associate($empresa);
        $hotel->save();

        return redirect()->route('hotel', ['idHotel' => $empresa->id]);
    }
}