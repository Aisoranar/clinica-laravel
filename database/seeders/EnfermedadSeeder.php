<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enfermedad;

class EnfermedadSeeder extends Seeder
{
    public function run()
    {
        Enfermedad::create([
            'nombre' => 'Gripe',
            'afecta' => 'Sistema respiratorio',
            'descripcion' => 'Infección viral común'
        ]);

        Enfermedad::create([
            'nombre' => 'Resfriado',
            'afecta' => 'Vías respiratorias superiores',
            'descripcion' => 'Infección viral del tracto respiratorio'
        ]);

        Enfermedad::create([
            'nombre' => 'Asma',
            'afecta' => 'Vías respiratorias',
            'descripcion' => 'Inflamación crónica de las vías respiratorias'
        ]);

        Enfermedad::create([
            'nombre' => 'Bronquitis',
            'afecta' => 'Bronquios',
            'descripcion' => 'Inflamación de los conductos bronquiales'
        ]);

        Enfermedad::create([
            'nombre' => 'Neumonía',
            'afecta' => 'Pulmones',
            'descripcion' => 'Infección de los sacos de aire en los pulmones'
        ]);
    }
}
