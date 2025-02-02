<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TareaFactory extends Factory
{

    protected $model = \App\Models\Tarea::class ;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idUsu'    => fake()->numberBetween(2, 10),
            'fecha'    => fake()->date(),
            'texto'    => fake()->text(),
            'completa' => fake()->boolean(0.25),
        ];
    }
}
