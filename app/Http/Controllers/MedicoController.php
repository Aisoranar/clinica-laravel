<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    // EndPoint: Devuelve todos los médicos
    public function index()
{
    try {
        $medicos = Medico::orderBy('nombres', 'asc')->get(); // Obtener la lista de médicos desde la base de datos
        return view("clinica.medico", ["medicos" => $medicos]);
    } catch (\Exception $e) {
        // Manejo de excepciones: muestra un mensaje de error o realiza alguna acción específica
        return back()->withError('Error al cargar los médicos: ' . $e->getMessage());
    }
}


    // EndPoint: Crea un nuevo médico
    public function store(Request $request)
{
    try {
        $medico = new Medico();
        $medico->nombres = $request->input('nombres');
        $medico->apellidos = $request->input('apellidos');
        $medico->fecha_nacimiento = $request->input('fecha_nacimiento');
        $medico->direccion = $request->input('direccion');
        $medico->telefono = $request->input('telefono');
        $medico->especialidad = $request->input('especialidad');
        $medico->id_contrato = $request->input('id_contrato');

        $medico->save();

        return $this->index()->with('success', 'Médico creado correctamente');
    } catch (\Exception $e) {
        return back()->withError('Error al crear el médico: ' . $e->getMessage());
    }
}



    public function update(Request $request)
{
    $medicos = new Medico();
    $medicos -> nombres = $request->nombres;
    $medicos -> apellidos = $request->apellidos;
    $medicos -> fecha_nacimiento = $request->fecha_nacimiento;
    $medicos -> direccion = $request->direccion;
    $medicos -> telefono = $request->telefono;
    $medicos -> especialidad = $request->especialidad;
    $medicos -> id_contrato = $request->id_contrato;

    $medicos->save();
    return $this->index();
}



public function edit($id)
{
    try {
        // Encuentra el médico por su ID
        $medico = Medico::findOrFail($id);

        // Muestra el formulario de edición con los detalles del médico
        return view('clinica.editar_medico', compact('medico'));
    } catch (\Exception $e) {
        // Manejo de excepciones: muestra un mensaje de error o realiza alguna acción específica
        return back()->withError('Error al editar el médico: ' . $e->getMessage());
    }
}


     
public function destroy($id)
{
    // Encuentra el paciente por su ID y elimínalo
    $medicos = Medico::findOrFail($id);
    $medicos->delete();
    
    // Recuperar la lista actualizada de pacientes después de eliminar
    $medicos = Medico::orderBy('fecha_nacimiento', 'asc')->get();
    
    // Redirecciona a la vista de pacientes con un mensaje de éxito
    return view("clinica.medico", compact('medicos'))->with('success', 'Medico eliminado correctamente');
}

    
    
}
