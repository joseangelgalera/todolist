<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Creamos el usuario administrador
        $this->call([UsuarioTableSeeder::class]);

        // Creamos usuarios aleatorios
        $usuarios = \App\Models\Usuario::factory(9)->create();

        // Creamos tareas aleatorias
        \App\Models\Tarea::factory(25)->create([
            'idUsu' => $usuarios->random()->idUsu,
        ]);

        // Creamos etiquetas aleatorias
        \App\Models\Etiqueta::factory(10)->create();

        // Creamos las relaciones entre tareas y etiquetas
        $this->call([TareaEtiquetaTableSeeder::class]);
    }
}