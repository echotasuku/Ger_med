<?php

namespace Tests\Unit;

use App\Models\Estoque;
use App\Models\Medicamento;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EstoqueTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_an_estoque()
    {
        // Cria um medicamento para vincular ao estoque
        $medicamento = Medicamento::factory()->create();

        // Dados para o estoque
        $estoqueData = [
            'lote' => 'Lote-123',
            'data_validade' => now()->addYear()->format('Y-m-d'),
            'quantidade_estoque' => 50,
            'preco' => 25.99,
            'medicamento_id' => $medicamento->id,
        ];

        // Cria o estoque
        $estoque = Estoque::create($estoqueData);

        // Verifica se foi salvo corretamente
        $this->assertDatabaseHas('estoque', $estoqueData);
        $this->assertInstanceOf(Estoque::class, $estoque);
    }

    /** @test */
    public function it_belongs_to_a_medicamento()
    {
        // Cria um estoque com relação a um medicamento
        $estoque = Estoque::factory()->create();

        // Verifica se a relação funciona
        $this->assertNotNull($estoque->medicamento);
        $this->assertInstanceOf(Medicamento::class, $estoque->medicamento);
    }

    /** @test */
    public function it_fails_validation_for_invalid_data()
    {
        // Tenta criar um estoque com dados inválidos
        $this->expectException(\Illuminate\Database\QueryException::class);

        Estoque::create([
            'lote' => null, // inválido
            'data_validade' => 'invalid_date', // inválido
            'quantidade_estoque' => -1, // inválido
            'preco' => -50, // inválido
            'medicamento_id' => 999, // ID inexistente
        ]);
    }
}
