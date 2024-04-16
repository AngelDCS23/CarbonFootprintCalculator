<?php

// app/Http/Controllers/AniosController.php

namespace App\Http\Controllers;

use App\Models\anio;
use App\Models\CombustibleMaquinariaDato;
use Illuminate\Http\Request;

class AniosController extends Controller
{
    // Mostrar todos los años
    public function index()
    {
        $anios = anio::all();
        return view('index', ['anios' => $anios]);
    }

    // Mostrar el formulario para crear un nuevo año
    public function create()
    {
        return view('anios.create');
    }

    // Guardar un nuevo año en la base de datos
    public function store(Request $request)
    {
        Anio::create($request->all());
        return redirect()->route('anios.index');
    }

}