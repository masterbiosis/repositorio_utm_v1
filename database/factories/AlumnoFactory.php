<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricula'=>'UTM'.'25'.$this->faker->numberBetween($min = 1000, $max = 9000),
            'nombre'=>$this->faker->name(),
            'app'=>$this->faker->randomElement(["Perez","Sosa","Torres"]),
            'apm'=>$this->faker->randomElement(["Martinez","Juarez","Santana","Rivera"]),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono'=>$this->faker->tollFreePhoneNumber(),
            'password'=>hash('sha256',$this->faker->randomElement(["12345678","87654321"])),
        ];
    }
}
