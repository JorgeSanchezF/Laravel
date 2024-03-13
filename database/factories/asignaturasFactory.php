<?php

namespace Database\Factories;

use App\Models\Asignatura;
use Illuminate\Database\Eloquent\Factories\Factory;

class asignaturasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $todos_id = Asignatura::pluck('id')->toArray();

        return [
            'nombre' => $this->faker->name(),
            'contenido' => $this->faker->name(),
            //
        ];
    }
}
