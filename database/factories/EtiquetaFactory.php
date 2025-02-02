<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtiquetaFactory extends Factory
{

    /**
     */
    protected $model = \App\Models\Etiqueta::class ;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'etiqueta'  => fake()->word(),
            'color'     => fake()->hexcolor(),
            
        ];
    }
}
