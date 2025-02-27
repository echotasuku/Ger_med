<?php

namespace Database\Factories;

use App\Models\Farmaceutico;
use Illuminate\Database\Eloquent\Factories\Factory;

class FarmaceuticoFactory extends Factory
{
    protected $model = Farmaceutico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_func' => $this->faker->unique()->randomNumber(5, true), // Número inteiro único com 5 dígitos
            'CRF' => $this->faker->unique()->regexify('[A-Z]{2}[0-9]{4}'), // Exemplo: SP1234
        ];
    }
}
