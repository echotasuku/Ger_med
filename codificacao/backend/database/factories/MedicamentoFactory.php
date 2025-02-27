<?php
namespace Database\Factories;

use App\Models\Medicamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicamentoFactory extends Factory
{
    protected $model = Medicamento::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'descricao' => $this->faker->sentence, // Exemplo de descrição
            'fornecedor_id' => \App\Models\Fornecedor::factory(), // Relacionamento com Fornecedor
            'categoria_id' => \App\Models\Categoria::factory(), // Relacionamento com Categoria
            'tarja' => $this->faker->randomElement(['vermelha', 'amarela', 'preta']), // Exemplo de tarjas
            'generico' => $this->faker->boolean, // true ou false
            'laboratorio' => $this->faker->company, // Nome do laboratório
            'dosagem' => $this->faker->randomElement(['500mg', '1g', '200mg']), // Exemplo de dosagens
            'via_administracao' => $this->faker->randomElement(['oral', 'intravenosa', 'topical']), // Vias de administração
        ];
    }
}
