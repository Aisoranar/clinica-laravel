<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    // EndPoint: Devuelve todos los historiales
    public function index()
    {
        return Historial::all();
    }

    // EndPoint: Crea un nuevo historial
    public function store(Request $request)
    {
        return Historial::create($request->all());
    }

    // EndPoint: Actualiza los datos de un historial específico según su `id`
    public function update(Request $request, $id)
    {
        $historial = Historial::findOrFail($id);
        $historial->update($request->all());
        return $historial;
    }

    // EndPoint: Elimina un historial específico según su `id`
    public function destroy($id)
    {
        $historial = Historial::findOrFail($id);
        $historial->delete();
        return response()->json(['message' => 'Historial eliminado']);
    }
}
