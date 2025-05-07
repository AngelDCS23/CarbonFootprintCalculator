<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\EmpresaGrat;
use App\Models\User;

use App\Models\PersonaGrat;

class CreacionUserGratController extends Controller{
    public function almacenarDatos(Request $request){
        $request->validate([
            'nombre_empresa' => 'required|string|max:200',
            'num_hoteles' => 'required|integer',
            'nombre_contacto' => 'required|string|max:200',
            'num_telefono' => 'required|string|max:20',
            'correo' => 'required|string|email|max:50',
            'password' => 'required|string|max:20',
        ]);

        $nombreEmpresa = strtolower($request->nombre_empresa);
        $nombreSolo = $request->nombre_empresa;

        $busquedaEmpresa = EmpresaGrat::where('Nombre', $nombreEmpresa)->first();

        if($busquedaEmpresa){
            \Log::info('entra en la condición');
            $idEmpresa = $busquedaEmpresa->id;
        }else{
            \Log::info('Entra en el else');
            $empresa = EmpresaGrat::create([
                'Nombre' => $nombreEmpresa,
                'Num_Hoteles' => $request->num_hoteles,
            ]);

            $empresa->save();

            $idEmpresa = $empresa->id;
            \Log::info('Empresa');
            \Log::info($empresa);
        }

        $hashed_password = Hash::make($request->password);

        $persona = User::create([
            'name' => $request->nombre_contacto,
            'email' => $request->correo,
            'password' => $hashed_password,
            'fk_idEmpresaGrat' => $idEmpresa,
            'premium' => '0',
            'num_telf' => $request->num_telefono,
        ]);

        $persona->save();

        //Almaceno datos para enviarlos a las otras vistas
        $request->session()->put('idUsuario', $persona->id);
        $request->session()->put('nombre_contacto', $request->input('nombre_contacto'));
        $request->session()->put('num_hoteles', $request->input('num_hoteles'));
        $request->session()->put('fk_idEmpresa', $empresa->id);
        //Con este último quise mandar la informacion comlpeta en el paquete para no tener que poenrla en la URL.
        //$request->session()->put('datos',$datos);

        // Redirigir al usuario al controlador con el ID del hotel como parámetro en la URL
        //return redirect()->route('hotel', ['idHotel' => $empresa->id]);
        //return redirect()->route('hotel', ['idHotel' => $empresa->id]);
        return redirect()->route('home');

    }
    public function listarDatos(){
    $datos = empresagrat::all();
    //el compact crea un array asociativo con campo valor.(Como un json "creo").
    return view('empresagrat', compact('datos'));
    }
}
