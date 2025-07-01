<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asesor>
 */
class AsesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'app'=>$this->faker->randomElement(["Perez","Sosa","Torres"]),
            'apm'=>$this->faker->randomElement(["Martinez","Juarez","Santana","Rivera"]),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono'=>$this->faker->tollFreePhoneNumber(),
        ];

        /*
        'nombre',
        'app',
        'apm',
        'email',
        'telefono',
        'empresa_id'
        */
    }
}
