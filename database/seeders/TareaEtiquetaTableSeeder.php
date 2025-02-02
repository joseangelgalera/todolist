<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TareaEtiquetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tarea_etiqueta')->insert([
            ['idTar' => 1, 'idEti' => 2],
            ['idTar' => 9, 'idEti' => 10],
            ['idTar' => 25, 'idEti' => 8],
            ['idTar' => 12, 'idEti' => 7],
            ['idTar' => 12, 'idEti' => 1],
            ['idTar' => 12, 'idEti' => 3],
        ]);
    }
}