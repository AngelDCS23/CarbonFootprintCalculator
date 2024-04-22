<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\EmpresaGrat;
use App\Models\PersonaGrat;

class CreacionUserGratController extends Controller{
    public function almacenarDatos(Request $request){
        // Validamos que los datos que han introducido son válidos para meterlos en la base
        $request->validate([
            'nombre_empresa' => 'required|string|max:200',
            'num_hoteles' => 'required|integer',
            'nombre_contacto' => 'required|string|max:200',
            'num_telefono' => 'required|string|max:20',
            'correo' => 'required|string|email|max:50',
            'password' => 'required|string|max:20',
        ]);

        // Creación de una nueva empresa
        $empresa = EmpresaGrat::create([
            'Nombre' => $request->nombre_empresa,
            'Num_Hoteles' => $request->num_hoteles,
        ]);

        // Hash de la contraseña para que laravel no llore
        $hashed_password = Hash::make($request->password);

        // Creación de una nueva persona asiciada a la empresa creada anteriormente
        $persona = PersonaGrat::create([
            'Nombre_Cont' => $request->nombre_contacto,
            'Num_telf' => $request->num_telefono,
            'Correo' => $request->correo,
            'fk_idEmpresa' => $empresa->id,
            'password' => $hashed_password,
        ]);

        $persona->empresa()->associate($empresa);
        $persona->save();

        $datos = $persona->toArray() + $empresa->toArray();

        //Almaceno datos para enviarlos a las otras vistas
        $request->session()->put('idUsuario', $persona->id);
        $request->session()->put('nombre_contacto', $request->input('nombre_contacto'));
        $request->session()->put('num_hoteles', $request->input('num_hoteles'));
        $request->session()->put('fk_idEmpresa', $empresa->id);
        //Con este último quise mandar la informacion comlpeta en el paquete para no tener que poenrla en la URL.
        //$request->session()->put('datos',$datos);

        // Redirigir al usuario al controlador con el ID del hotel como parámetro en la URL
        return redirect()->route('hotel', ['idHotel' => $empresa->id]);

    }
    public function listarDatos(){
    $datos = empresagrat::all();
    //el compact crea un array asociativo con campo valor.(Como un json "creo").
    return view('empresagrat', compact('datos'));
    }
}
