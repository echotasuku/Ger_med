<?php

namespace Database\Factories;

use App\Models\Retirada;
use App\Models\Medicamento;
use App\Models\Farmaceutico;
use Illuminate\Database\Eloquent\Factories\Factory;

class RetiradaFactory extends Factory
{
    protected $model = Retirada::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'data' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'), // Data aleatória no passado
            'medicamento_id' => Medicamento::factory(), // Cria um Medicamento associado
            'farmaceutico_id' => Farmaceutico::factory(), // Cria um Farmacêutico associado
            'receita' => null, // Opcional, sem arquivo por padrão
            'quantidade' => $this->faker->numberBetween(1, 50), // Quantidade entre 1 e 50
        ];
    }
}
