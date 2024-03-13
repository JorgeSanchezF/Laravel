<?php

namespace Database\Factories;

use App\Models\Ciclo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ciclosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $todos_id = Ciclo::pluck('id')->toArray();

        return [
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->realTextBetween($minNbChars = 50, $maxNbChars = 191, $indexSize = 2),
            //
        ];
    }
}
