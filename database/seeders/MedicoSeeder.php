<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medico;

class MedicoSeeder extends Seeder
{
    public function run()
    {
        Medico::create([
            'nombres' => 'Camilo González',
            'apellidos' => 'Sánchez',
            'fecha_nacimiento' => '1985-03-20',
            'direccion' => 'Calle 52 Cra 28',
            'telefono' => '3022997274',
            'especialidad' => 'Pediatra',
            'id_contrato' => 1 
        ]);

        Medico::create([
            'nombres' => 'Juliana Martínez',
            'apellidos' => 'López',
            'fecha_nacimiento' => '1978-05-15',
            'direccion' => 'Calle 52 Cra 12',
            'telefono' => '3022997114',
            'especialidad' => 'Cardiólogo',
            'id_contrato' => 2 
        ]);

        Medico::create([
            'nombres' => 'Andres Pérez',
            'apellidos' => 'Fernández',
            'fecha_nacimiento' => '1990-09-10',
            'direccion' => 'Calle 52 Cra 22',
            'telefono' => '3022997058',
            'especialidad' => 'Dermatólogo',
            'id_contrato' => 3 
        ]);

        Medico::create([
            'nombres' => 'Belcy Rodríguez',
            'apellidos' => 'García',
            'fecha_nacimiento' => '1982-11-25',
            'direccion' => 'Calle 52 Cra 26',
            'telefono' => '3022994758',
            'especialidad' => 'Oftalmólogo',
            'id_contrato' => 1 
        ]);

        Medico::create([
            'nombres' => 'Damian López',
            'apellidos' => 'Hernández',
            'fecha_nacimiento' => '1975-06-30',
            'direccion' => 'Calle 52 Cra 13',
            'telefono' => '3022997963',
            'especialidad' => 'Ginecólogo',
            'id_contrato' => 2 
        ]);
    }
}
