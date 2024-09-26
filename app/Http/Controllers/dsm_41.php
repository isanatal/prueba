<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dsm_41 extends Controller
{
    // Método para manejar la solicitud POST
    public function guardarDatos(Request $request)
    {
        // Validación y procesamiento de los datos
        $validatedData = $request->validate([
            'campo1' => 'required',
            'campo2' => 'required',
        ]);

        // Ejemplo de guardar los datos o procesar la lógica
        // ModeloEjemplo::create($validatedData);

        return redirect()->back()->with('success', 'Datos guardados correctamente');
    }
}