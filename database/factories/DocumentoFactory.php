<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Documento>
 */
class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo'=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'fecha_presentacion'=>$this->faker->dateTimeBetween(now(), '+1 year')
        ];

        /*
         $table->string('titulo');
         $table->date('fecha_presentacion');


         'nombre'=>$this->faker->randomElement(["Pepsico","Tron Hermanos","Gamesa","Bimbo","Cocacola","Turismo de Michoacan"]),
            'direccion'=>$this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono'=>$this->faker->tollFreePhoneNumber(),
         */
    }
}
