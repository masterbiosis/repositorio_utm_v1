<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Director>
 */
class DirectorFactory extends Factory
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
            'apm'=>$this->faker->randomElement(["Perez","Sosa","Torres",""]),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono'=>$this->faker->tollFreePhoneNumber(),
        ];
    }
}
