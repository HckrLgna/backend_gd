<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'funcion' => $this->faker->word,
            'cargo' => $this->faker->word,
            'estatus' => $this->faker->boolean,
            'fecha_inicio' => $this->faker->date,
        ];
    }
}
