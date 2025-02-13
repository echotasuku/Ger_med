<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FornecedorIntegrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_consulta_cep_retorna_dados_corretos()
    {
        // 1. Mockar a resposta da API do ViaCEP com todos os campos necessários
        Http::fake([
            'https://viacep.com.br/ws/12345-678/json/' => Http::response([
                'cep' => '12345-678',
                'logradouro' => 'Rua Teste',
                'bairro' => 'Bairro Teste',
                'cidade' => 'Cidade Teste',
                'uf' => 'SP'
            ], 200),
        ]);

        // 2. Fazer a requisição GET para o método de consulta de CEP
        $response = $this->get('/api/consultar-cep/12345-678');

        // 3. Verificar se a resposta contém os dados corretos e mapeados
        $response->assertStatus(200)
                 ->assertJson([
                    'cep' => '12345-678',
                    'logradouro' => 'Rua Teste',
                    'bairro' => 'Bairro Teste',
                    'cidade' => 'Cidade Teste', // localidade mapeada como cidade
                    'uf' => 'SP'
                 ]);
    }

    /** @test */
    public function test_consulta_cep_invalido_retorna_erro()
    {
        // Mockar uma resposta de erro da API do ViaCEP
        Http::fake([
            'https://viacep.com.br/ws/99999-999/json/' => Http::response(['erro' => true], 200),
        ]);

        // Requisição GET ao método de consulta de CEP com CEP inválido
        $response = $this->get('/api/consultar-cep/99999-999');

        // Verifica se a resposta retorna o erro esperado
        $response->assertStatus(200)
                 ->assertJson(['erro' => true]);
    }
}
