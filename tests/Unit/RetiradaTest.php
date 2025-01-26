<?php

namespace Tests\Unit;

use App\Models\Retirada;
use App\Models\Medicamento;
use App\Models\Farmaceutico;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RetiradaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_retirada()
    {
        // Cria medicamentos e farmacêuticos para a retirada
        $medicamento = Medicamento::factory()->create();
        $farmaceutico = Farmaceutico::factory()->create();

        // Dados para retirada
        $retiradaData = [
            'data' => now()->format('Y-m-d'),
            'medicamento_id' => $medicamento->id,
            'farmaceutico_id' => $farmaceutico->id,
            'quantidade' => 10,
            'receita' => null, // Sem arquivo por padrão
        ];

        // Cria retirada
        $retirada = Retirada::create($retiradaData);

        // Verifica se foi salvo corretamente
        $this->assertDatabaseHas('retiradas', $retiradaData);
        $this->assertInstanceOf(Retirada::class, $retirada);
    }

    /** @test */
    public function it_belongs_to_a_medicamento_and_farmaceutico()
    {
        // Cria uma retirada com relações
        $retirada = Retirada::factory()->create();

        // Verifica se as relações estão funcionando
        $this->assertNotNull($retirada->medicamento);
        $this->assertNotNull($retirada->farmaceutico);
        $this->assertInstanceOf(Medicamento::class, $retirada->medicamento);
        $this->assertInstanceOf(Farmaceutico::class, $retirada->farmaceutico);
    }

    /** @test */
    public function it_fails_validation_for_invalid_data()
    {
        // Tenta criar uma retirada com dados inválidos
        $this->expectException(\Illuminate\Database\QueryException::class);

        Retirada::create([
            'data' => 'invalid_date', // Inválido
            'medicamento_id' => null, // Inválido
            'farmaceutico_id' => null, // Inválido
            'quantidade' => -5, // Inválido
            'receita' => null,
        ]);
    }
}
