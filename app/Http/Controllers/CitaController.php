<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller
{
    public function index()
    {
        return view('citas');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'fecha' => 'required|date',
            'hora' => 'required',
            'motivo' => 'required|string|max:255',
        ]);

        // Guardar en la base de datos
        Cita::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'motivo' => $request->motivo,
        ]);

        return redirect('/citas')->with('success', '¡Cita registrada con éxito!');
    }

    public function listado()
    {
        $citas = Cita::all(); // obtiene todas las citas
        return view('citas-listado', compact('citas'));
    }
}




