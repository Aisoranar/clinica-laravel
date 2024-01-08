<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

use App\Models\Medico;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{
    // EndPoint: Devuelve todos los pacientes ordenados por fecha de nacimiento de menor a mayor
    public function index()
{
    $pacientes = Paciente::orderBy('fecha_nacimiento', 'asc')->get();
    //dd($pacientes); 
    return view("clinica.paciente", compact('pacientes'));
}


    // EndPoint: Crea un nuevo paciente
    public function store(Request $request)
{
    try {
        $ultimo_id = DB::table('medicos')->max('id'); // buscar en la tabla de medicos el ID mas alto
        $id_aleatorio = rand(1, $ultimo_id); // busca un numero aleatorio entre el 1 y el id mas alto de la tabla

        $paciente = new Paciente();
        $paciente->nombres = $request->nombres;
        $paciente->apellidos = $request->apellidos;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;
        $paciente->id_medico = $id_aleatorio; //id aleatorio

        $paciente->save();
        return $this->index();

    } catch (QueryException $e) {
        // Manejar errores específicos aquí
        if ($e->errorInfo[1] === 1406) {
            return redirect()->back()->with('error', 'El número de teléfono es demasiado largo.');
        } else {
            return redirect()->back()->with('error', 'Hubo un error al crear el paciente.');
        }
    }
}

    public function update(Request $request)
{
    $paciente = Paciente::findOrFail($request->id);
    
    $paciente -> nombres = $request->nombres;
    $paciente -> apellidos = $request->apellidos;
    $paciente -> fecha_nacimiento = $request->fecha_nacimiento;
    $paciente -> direccion = $request->direccion;
    $paciente -> telefono = $request->telefono;
    $paciente -> id_medico = $request->id_medico;
    
    $paciente->save();
    return $this->index();

}
     
public function destroy($id)
{
    // Encuentra el paciente por su ID y elimínalo
    $paciente = Paciente::findOrFail($id);
    $paciente->delete();
    
    // Recuperar la lista actualizada de pacientes después de eliminar
    $pacientes = Paciente::orderBy('fecha_nacimiento', 'asc')->get();
    
    // Redirecciona a la vista de pacientes con un mensaje de éxito
    return view("clinica.paciente", compact('pacientes'))->with('success', 'Paciente eliminado correctamente');
}


    

    public function edit($id)
    {
        // Encuentra el paciente por su ID
        $paciente = Paciente::findOrFail($id);

        // Si encuentra al paciente, muestra el formulario de edición
        return view('clinica.editar_paciente', compact('paciente'));
    }

}
