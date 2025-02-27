<?php

namespace Tests\Unit;

use Tests\TestCase;
use Mockery;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\FornecedorController;
use Illuminate\Testing\TestResponse;

class FornecedorMockTest extends TestCase
{
    public function test_mock_consulta_cep_sucesso()
    {
        // Dados simulados da API ViaCEP
        $mockResponse = [
            'cep' => '12345-678',
            'logradouro' => 'Rua Teste',
            'bairro' => 'Bairro Teste',
            'localidade' => 'Cidade Teste',
            'uf' => 'SP',
        ];

        // Mocka a chamada HTTP para a API ViaCEP
        Http::fake([
            'viacep.com.br/ws/12345-678/json/' => Http::response($mockResponse, 200),
        ]);

        // Executa o método do controller
        $controller = new FornecedorController();
        $jsonResponse = $controller->consultarCep('12345-678');

        // Converte a JsonResponse para TestResponse
        $response = TestResponse::fromBaseResponse($jsonResponse);

        // Verifica o status e os dados retornados
        $response->assertStatus(200);
        $response->assertJson($mockResponse);
    }

    public function test_mock_consulta_cep_invalido()
    {
        // Dados simulados de erro da API ViaCEP
        $mockResponse = ['erro' => true];

        // Mocka a chamada HTTP para a API ViaCEP
        Http::fake([
            'viacep.com.br/ws/99999-999/json/' => Http::response($mockResponse, 200),
        ]);

        // Executa o método do controller
        $controller = new FornecedorController();
        $jsonResponse = $controller->consultarCep('99999-999');

        // Converte a JsonResponse para TestResponse
        $response = TestResponse::fromBaseResponse($jsonResponse);

        // Verifica o status e os dados retornados
        $response->assertStatus(200);
        $response->assertJson($mockResponse);
    }
}
