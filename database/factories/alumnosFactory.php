<?php

namespace Database\Factories;

use App\Models\Alumnos;
use Illuminate\Database\Eloquent\Factories\Factory;

class alumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $todos_id = Alumnos::pluck('id')->toArray();

        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'DNI' => $this->faker->dni(),
            'fecha_nacimiento' => $this->faker->dateTimeThisCentury(),
            'numero_matricula' => $this->faker->randomNumber(8, true),
            'email' => $this->faker->email(),
            //
        ];
    }
}
