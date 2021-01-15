<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan make:seeder +nombre+ Para crear Seeders
        // /*Se utilizan seeders, para que a la hora de migrar una tabla nueva en la bd,
        // esta aparezca con algunos datos que cargamos previamente en el codigo.
        // Generalmente se usa para crear algunos datos de prueba */
        // $curso = new Curso();

        // $curso->name = "Laravel";
        // $curso->descripcion = "El Mejor Framework de Php";
        // $curso->categoria = "Desarrollo Web";

        // $curso->save();
        Curso::factory(50)->create();
    }
}
