<?php

namespace App\Http\Controllers;

use App\Models\TipoContrato;
use Illuminate\Http\Request;

class TipoContratoController extends Controller
{
    // EndPoint: Devuelve todos los tipos de contrato
    public function index()
    {
        return TipoContrato::all();
    }

    // EndPoint: Crea un nuevo tipo de contrato
    public function store(Request $request)
    {
        return TipoContrato::create($request->all());
    }

    // EndPoint: Actualiza los datos de un tipo de contrato específico según su `id`
    public function update(Request $request, $id)
    {
        $tipoContrato = TipoContrato::findOrFail($id);
        $tipoContrato->update($request->all());
        return $tipoContrato;
    }

    // EndPoint: Elimina un tipo de contrato específico según su `id`
    public function destroy($id)
    {
        $tipoContrato = TipoContrato::findOrFail($id);
        $tipoContrato->delete();
        return response()->json(['message' => 'Tipo de contrato eliminado']);
    }
}
