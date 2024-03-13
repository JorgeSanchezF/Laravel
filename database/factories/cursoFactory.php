<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class cursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $todos_id = Curso::pluck('id')->toArray();
        return [
            'curso' => $this->faker->name(),
            //
        ];
    }
}
