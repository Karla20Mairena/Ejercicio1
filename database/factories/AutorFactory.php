<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autor>
 */
class AutorFactory extends Factory
{
    /*$table->string('nombre');
    $table->string('apellido');
    $table->string('pais');
    $table->integer('edad');*/
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
         'nombre'=>fake()->firstname(),
         'apellido'=>fake()->lastname(),
         'pais'=>fake()->country(),
         'edad'=>fake()->numberBetween(30,80)


        ];
    }
}
