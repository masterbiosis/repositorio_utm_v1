<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lineas>
 */
class LineasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->text($maxNbChars = 40),
            'descripcion'=>$this->faker->text($maxNbChars = 200),
        ];

        /*
        'nombre'=>$this->faker->randomElement(["Pepsico","Tron Hermanos","Gamesa","Bimbo","Cocacola","Turismo de Michoacan"]),
            'direccion'=>$this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono'=>$this->faker->tollFreePhoneNumber(),

        'nombre',
        'descripcion',
        */
    }
}
