<?php

namespace Tests\Unit;

use App\Models\Fornecedor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FornecedorControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_returns_all_fornecedores()
    {
        // Cria fornecedores para testar
        Fornecedor::factory()->count(3)->create();

        // Faz a requisição para o endpoint
        $response = $this->get('/api/fornecedores');

        // Verifica se o status da resposta é 200 e se a quantidade de registros está correta
        $response->assertStatus(200);
        $response->assertJsonCount(3);
    }

    public function test_store_creates_new_fornecedor()
    {
        // Dados de exemplo
        $data = [
            'nome' => 'Fornecedor Te',
            'contato' => '1234567',
            'logradouro' => 'Rua Tes',
            'bairro' => 'Bairro Tes',
            'cidade' => 'Cidade',
            'uf' => 'TW',
            'cep' => '12345688'
        ];

        // Faz a requisição de POST
        $response = $this->post('/api/fornecedores', $data);

        // Verifica se o status da resposta é 201 e se o registro foi salvo corretamente
        $response->assertStatus(201);
        $this->assertDatabaseHas('fornecedores', $data);
    }

    public function test_show_returns_fornecedor_by_id()
    {
        // Cria um fornecedor de exemplo
        $fornecedor = Fornecedor::factory()->create();

        // Faz a requisição para o endpoint
        $response = $this->get("/api/fornecedores/{$fornecedor->id}");

        // Verifica se o status da resposta é 200 e se o JSON retornado está correto
        $response->assertStatus(200);
        $response->assertJson($fornecedor->toArray());
    }

    public function test_update_edits_fornecedor()
    {
        // Cria um fornecedor de exemplo
        $fornecedor = Fornecedor::factory()->create();

        // Dados atualizados
        $data = [
            'nome' => 'Fornecedor Editado',
            'contato' => '987654321',
        ];

        // Faz a requisição de PUT
        $response = $this->put("/api/fornecedores/{$fornecedor->id}", $data);

        // Verifica se o status da resposta é 200 e se o registro foi atualizado corretamente
        $response->assertStatus(200);
        $this->assertDatabaseHas('fornecedores', $data);
    }

    public function test_destroy_deletes_fornecedor()
    {
        // Cria um fornecedor de exemplo
        $fornecedor = Fornecedor::factory()->create();

        // Faz a requisição de DELETE
        $response = $this->delete("/api/fornecedores/{$fornecedor->id}");

        // Verifica se o status da resposta é 204 e se o registro foi excluído
        $response->assertStatus(204);
        $this->assertDatabaseMissing('fornecedores', ['id' => $fornecedor->id]);
    }
}
