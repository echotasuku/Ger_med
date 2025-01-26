<?php

namespace Tests\Unit;

use App\Models\Medicamento;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MedicamentoControllerTest extends TestCase
{
    use RefreshDatabase;

    // Testa se o index retorna todos os medicamentos
    public function test_index_returns_all_medicamentos()
    {
        // Cria 7 medicamentos para testar
        Medicamento::factory()->count(7)->create();

        // Faz a requisição para o endpoint
        $response = $this->get('/api/medicamentos');

        // Verifica se o status da resposta é 200 e se a quantidade de registros está correta
        $response->assertStatus(200);
        $response->assertJsonCount(7);  // Espera 7 registros, pois foram criados 7 medicamentos
    }

    // Testa se o store cria um novo medicamento
public function test_store_creates_new_medicamento()
{
    // Cria um fornecedor e uma categoria para garantir que os IDs existem no banco de dados
    $fornecedor = \App\Models\Fornecedor::factory()->create();
    $categoria = \App\Models\Categoria::factory()->create();

    // Dados completos de um medicamento para a criação
    $data = [
        'nome' => 'Paracetamol',
        'descricao' => 'Medicamento para dor',
        'fornecedor_id' => $fornecedor->id,  // Usando o ID do fornecedor criado
        'categoria_id' => $categoria->id,   // Usando o ID da categoria criada
        'tarja' => 'Vermelha',
        'generico' => true,
        'laboratorio' => 'Lab X',
        'dosagem' => '500mg',
        'via_administracao' => 'Oral',
    ];

    // Faz a requisição de POST
    $response = $this->post('/api/medicamentos', $data);

    // Verifica se o status da resposta é 201 e se o medicamento foi salvo corretamente
    $response->assertStatus(201);
    $this->assertDatabaseHas('medicamentos', $data);
}


    // Testa se o show retorna o medicamento por ID
    public function test_show_returns_medicamento_by_id()
    {
        // Cria um medicamento de exemplo
        $medicamento = Medicamento::factory()->create();

        // Faz a requisição para o endpoint
        $response = $this->get("/api/medicamentos/{$medicamento->id}");

        // Verifica se o status da resposta é 200 e se os dados estão corretos
        $response->assertStatus(200);
        $response->assertJson($medicamento->toArray());
    }

    // Testa se o update edita o medicamento
    public function test_update_edits_medicamento()
    {
        // Cria um medicamento de exemplo
        $medicamento = Medicamento::factory()->create();

        // Dados atualizados
        $data = [
            'nome' => 'Paracetamol 500mg Editado',
            'descricao' => 'Novo descrição',
            'fornecedor_id' => $medicamento->fornecedor_id,  // Mantém o fornecedor
            'categoria_id' => $medicamento->categoria_id,    // Mantém a categoria
            'tarja' => 'Amarela',
            'generico' => false,
            'laboratorio' => 'Novo Lab',
            'dosagem' => '600mg',
            'via_administracao' => 'Intravenosa',
        ];

        // Faz a requisição de PUT
        $response = $this->put("/api/medicamentos/{$medicamento->id}", $data);

        // Verifica se o status da resposta é 200 e se os dados foram atualizados corretamente
        $response->assertStatus(200);
        $this->assertDatabaseHas('medicamentos', $data);
    }

    // Testa se o destroy deleta o medicamento
    public function test_destroy_deletes_medicamento()
    {
        // Cria um medicamento de exemplo
        $medicamento = Medicamento::factory()->create();

        // Faz a requisição de DELETE
        $response = $this->delete("/api/medicamentos/{$medicamento->id}");

        // Verifica se o status da resposta é 204 e se o medicamento foi excluído
        $response->assertStatus(204);
        $this->assertDatabaseMissing('medicamentos', ['id' => $medicamento->id]);
    }
}
