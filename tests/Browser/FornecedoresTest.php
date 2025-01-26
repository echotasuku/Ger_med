<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FornecedoresTest extends DuskTestCase
{
    /**
     * Testa a navegação para a página de fornecedores.
     */
    public function testNavigateToFornecedores()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/fornecedores')
                ->waitForText('Fornecedores', 15)
                ->assertSee('Fornecedores')
                ->screenshot('pagina_fornecedores');
        });
    }

    /**
     * Testa a criação de um novo fornecedor.
     */
    public function testCreateFornecedor()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/fornecedores')
                ->waitFor('button.btn-primary', 15)
                ->click('button.btn-primary')
                ->waitFor('.modal', 15)
                ->type('input[name="nome"]', 'Fornecedor Dusk Test')
                ->type('input[name="cep"]', '05036900')
                ->waitFor('input[name="logradouro"]', 15)
                ->type('input[name="contato"]', 'contato@dusk.com')
                ->press('button[type="submit"]')
                ->waitForText('Fornecedor Dusk Test', 15)
                ->screenshot('fornecedor_adicionado');
        });
    }

    /**
     * Testa a edição de um fornecedor existente.
     */
    public function testEditFornecedor()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/fornecedores')
                ->waitForText('Fornecedor Dusk Test', 15)
                ->click('button.btn-info') // Botão Editar
                ->waitFor('.modal', 15)
                ->type('input[name="nome"]', 'Fornecedor Editado Dusk')
                ->type('input[name="contato"]', 'editado@dusk.com')
                ->press('button[type="submit"]')
                ->waitForText('Fornecedor Editado Dusk', 15)
                ->screenshot('fornecedor_editado');
        });
    }

    /**
     * Testa a exclusão de um fornecedor.
     */
    public function testDeleteFornecedor()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/fornecedores')
                ->waitForText('Fornecedor Editado Dusk', 15)
                ->click('button.ms-2.btn.btn-danger') // Botão Excluir
                ->waitUntilMissingText('Fornecedor Editado Dusk', 15)
                ->screenshot('fornecedor_excluido');
        });
    }
}