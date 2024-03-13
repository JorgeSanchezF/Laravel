<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class profesoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $todos_id = User::pluck('id')->toArray();  cambiado para usar profesores en vez de usuarios
        $todos_id = Profesor::pluck('id')->toArray();

        return [
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->lastname(),//modificado para que sean apellido (Jorge)
            'fecha_nacimiento' => $this->faker->dateTimeBetween('-50 years', '-25 years'),//modificado para ser  un rango de años en vez de fecha de hoy (Jorge)
            'dni' => $this->faker->dni(),//modificado para que sea con formato dni real (Jorge)
            'telefono' => $this->faker->phoneNumber(),//modificado para que sea con formato telefono (Jorge)
            'user_id' => $this->faker->randomElements($todos_id)[0], // un numero del 0 al 9
            //
        ];
    }
}
