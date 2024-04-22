<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hoteles_usuario;
use App\Models\EmpresaGrat;

class CreacionHotelController extends Controller
{
    public function almacenarHotel(Request $request){
        $request->validate([
            'Nombre' => 'required|string|max:45',
            'Direccion' => 'required|string|max:200',
            'Pais' => 'required|string|max:45',
            'Numero_camas' => 'required|integer',
        ]);

        $empresa = EmpresaGrat::find($request->session()->get('idEmpresa'));

        // $allSessions = session()->all();
        // dd($allSessions);

        $hotel = hoteles_usuario::create([
            'Nombre' => $request -> Nombre,
            'Direccion' => $request -> Direccion,
            'Pais' => $request -> Pais,
            'Numero_camas' => $request -> Numero_camas,
            'fk_idEmpresa' => $empresa->id,
        ]);
        
        $hotel->empresa()->associate($empresa);
        $hotel->save();

        //return redirect()->route('hotel');
        return redirect()->route('hotel', ['idHotel' => $empresa->id]);
    }
}