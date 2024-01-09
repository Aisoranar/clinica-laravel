<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

use App\Models\Medico;
use Illuminate\Support\Facades\DB;
use LengthException;

use function Laravel\Prompts\select;

class PacienteController extends Controller
{
    // EndPoint: Devuelve todos los pacientes ordenados por fecha de nacimiento de menor a mayor
    public function index()
{
    $pacientes = Paciente::orderBy('fecha_nacimiento', 'asc')->get();
    return view("clinica.paciente", compact('pacientes'));
}

    public function create()
    {
        return view('clinica.nuevo_paciente');
    }


    // EndPoint: Crea un nuevo paciente
    public function store(Request $request)
{
    try {
        //$ultimo_id = DB::table('medicos')->max('id'); // buscar en la tabla de medicos el ID mas alto
        $medicos = DB::table('medicos')->select("id")->get();

        $id_aleatorio = rand(0, count($medicos)); // busca un numero aleatorio entre el 1 y el id mas alto de la tabla
        
        $paciente = new Paciente();
        $paciente->nombres = $request->nombres;
        $paciente->apellidos = $request->apellidos;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;       
        $paciente->id_medico = $medicos[$id_aleatorio]->id; //id aleatorio
        $paciente->save();

        // Obtener la lista actualizada de pacientes después de guardar
        $paciente = Paciente::orderBy('fecha_nacimiento', 'asc')->get();

        // Redireccionar a la vista de lista de pacientes después de guardar
        return redirect('/paciente')->with('success', 'Paciente creado correctamente');

    } catch (QueryException $e) {
        // Manejar errores específicos aquí
        if ($e->errorInfo[1] === 1406) {
            return redirect()->back()->with('error', 'El número de teléfono es demasiado largo.');
        } else {
            return redirect()->back()->with('error', 'Hubo un error al crear el paciente.');
        }
    }
}


public function update(Request $request, $id)
{
    try {
        $paciente = Paciente::findOrFail($id);

        // Asigna los valores del formulario a las propiedades del paciente
        $paciente->nombres = $request->input('nombres');
        $paciente->apellidos = $request->input('apellidos');
        $paciente->fecha_nacimiento = $request->input('fecha_nacimiento');
        $paciente->direccion = $request->input('direccion');
        $paciente->telefono = $request->input('telefono');
        $paciente->id_medico = $request->input('id_medico'); // Asegúrate de recibir el id_medico desde el formulario

        $paciente->save();

        return redirect('/paciente')->with('success', 'Paciente actualizado correctamente');

    } catch (\Exception $e) {
        return back()->withError('Error al actualizar el paciente: ' . $e->getMessage());
    }
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
        $paciente = Paciente::findOrFail($id);

        return view('clinica.editar_paciente', compact('paciente'));
    }
}
