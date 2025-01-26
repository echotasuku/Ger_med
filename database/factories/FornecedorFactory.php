<?php

namespace Database\Factories;

use App\Models\Fornecedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class FornecedorFactory extends Factory
{
    protected $model = Fornecedor::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->company,           // Gera um nome de empresa
            'contato' => $this->faker->email,          // Gera um endereço de email
            'logradouro' => $this->faker->streetAddress, // Gera um endereço
            'bairro' => $this->faker->streetName,      // Gera o nome de uma rua como bairro
            'cidade' => $this->faker->city,            // Gera uma cidade
            'uf' => $this->faker->stateAbbr,           // Gera uma abreviação de estado (ex: SP, RJ)
          'cep' => $this->faker->numerify('########'), // Gera um CEP com 8 dígitos numéricos
          // Gera um CEP
        ];
    }
}
