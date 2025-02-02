<?php

namespace Database\Seeders;

use App\Models\Usuario ; 

use Illuminate\Support\Facades\Hash ; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Usuario::create([
            'nombre' => 'José Ángel Galera',
            'email' => 'admin@todolist.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
