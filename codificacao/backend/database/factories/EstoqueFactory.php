<?php

namespace Database\Factories;

use App\Models\Estoque;
use App\Models\Medicamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstoqueFactory extends Factory
{
    protected $model = Estoque::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lote' => $this->faker->unique()->bothify('Lote-###??'), // Exemplo: Lote-123AB
            'data_validade' => $this->faker->dateTimeBetween('+1 month', '+2 years')->format('Y-m-d'), // Data futura
            'quantidade_estoque' => $this->faker->numberBetween(1, 100), // Quantidade entre 1 e 100
            'preco' => $this->faker->randomFloat(2, 1, 1000), // Preço entre 1 e 1000 com 2 casas decimais
            'medicamento_id' => Medicamento::factory(), // Gera um Medicamento associado
        ];
    }
}
