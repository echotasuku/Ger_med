<?php

namespace Tests\Unit;

use App\Models\Categoria;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoriaControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_returns_all_categorias()
    {
        Categoria::factory()->count(3)->create();

        $response = $this->get('/api/categorias');

        $response->assertStatus(200);
        $response->assertJsonCount(3);
    }

    public function test_store_creates_new_categoria()
    {
        $data = [
            'nome' => 'Categoria Teste',
            'descricao' => 'Descrição da categoria teste',
        ];

        $response = $this->post('/api/categorias', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('categorias', $data);
    }

    public function test_show_returns_categoria_by_id()
    {
        $categoria = Categoria::factory()->create();

        $response = $this->get("/api/categorias/{$categoria->id}");

        $response->assertStatus(200);
        $response->assertJson($categoria->toArray());
    }

    public function test_update_edits_categoria()
    {
        $categoria = Categoria::factory()->create();

        $data = [
            'nome' => 'Categoria Editada',
            'descricao' => 'Descrição editada da categoria',
        ];

        $response = $this->put("/api/categorias/{$categoria->id}", $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('categorias', $data);
    }

    public function test_destroy_deletes_categoria()
    {
        $categoria = Categoria::factory()->create();

        $response = $this->delete("/api/categorias/{$categoria->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('categorias', ['id' => $categoria->id]);
    }
}
