<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{
    public function run()
    {
        Paciente::create([
            'nombres' => 'Juan',
            'apellidos' => 'Gomez',
            'fecha_nacimiento' => '2004-05-15',
            'direccion' => 'Calle 52 Cra 10',
            'telefono' => '3033122569',
            'id_medico' => 1
        ]);

        Paciente::create([
            'nombres' => 'Sebastian',
            'apellidos' => 'Romero',
            'fecha_nacimiento' => '2003-08-22',
            'direccion' => 'Calle 52 Cra 11',
            'telefono' => '3033122558',
            'id_medico' => 2
        ]);

        Paciente::create([
            'nombres' => 'Aisor',
            'apellidos' => 'Anaya',
            'fecha_nacimiento' => '2002-01-10',
            'direccion' => 'Calle 52 Cra 13',
            'telefono' => '3033122547',
            'id_medico' => 3
        ]);

        Paciente::create([
            'nombres' => 'Natalia',
            'apellidos' => 'Celis',
            'fecha_nacimiento' => '2001-11-05',
            'direccion' => 'Calle 52 Cra 18',
            'telefono' => '3033122536',
            'id_medico' => 4
        ]);

        Paciente::create([
            'nombres' => 'Yicela',
            'apellidos' => 'Fernández',
            'fecha_nacimiento' => '2000-03-28',
            'direccion' => 'Calle 52 Cra 1',
            'telefono' => '3033122525',
            'id_medico' => 5
        ]);
    }
}
