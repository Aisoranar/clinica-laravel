<?php

namespace App\Http\Controllers;

use App\Models\Enfermedad;
use Illuminate\Http\Request;

class EnfermedadController extends Controller
{
    // EndPoint: Devuelve todas las enfermedades
    public function index()
    {
        return Enfermedad::all();
    }

    // EndPoint: Crea una nueva enfermedad
    public function store(Request $request)
    {
        return Enfermedad::create($request->all());
    }

    // EndPoint: Actualiza los datos de una enfermedad específica según su `id`
    public function update(Request $request, $id)
    {
        $enfermedad = Enfermedad::findOrFail($id);
        $enfermedad->update($request->all());
        return $enfermedad;
    }

    // EndPoint: Elimina una enfermedad específica según su `id`
    public function destroy($id)
    {
        $enfermedad = Enfermedad::findOrFail($id);
        $enfermedad->delete();
        return response()->json(['message' => 'Enfermedad eliminada']);
    }
}
