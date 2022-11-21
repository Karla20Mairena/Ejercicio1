<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
          
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo'=>fake()->name(),
            'fecha_lanzamiento'=>fake()->dateTimeBetween('-50 years','-10 years'),
            'idiomas'=>fake()->text(),
            'N_paginas'=>fake()->numerify('####'),
            'categoria'=>fake()->text()

        ];
    }
}
