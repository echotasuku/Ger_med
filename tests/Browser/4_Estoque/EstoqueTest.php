<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EstoqueTest extends DuskTestCase
{
    /**
     * Testa a navegação para a página de estoque.
     */
    public function testNavigateToEstoque()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/estoque')
                ->waitForText('Estoque', 15)
                ->assertSee('Estoque')
                ->screenshot('pagina_estoque');
        });
    }

    /**
     * Testa a criação de um novo registro de estoque.
     */
 public function testCreateEstoque()
{
    $this->browse(function (Browser $browser) {
        $browser->visit('/estoque')
            ->waitFor('button.btn-primary', 15)
            ->click('button.btn-primary')  // Abre o modal
            ->waitFor('.modal', 15)
            ->type('input[name="lote"]', 'Lote Dusk Test')
            ->type('input[name="data_validade"]', '31-12-2025')
            ->type('input[name="quantidade_estoque"]', '50')
            ->type('input[name="preco"]', '100.50')

            // Seleciona o medicamento usando clicks
            ->click('select[name="medicamento_id"]')  // Abre o dropdown de medicamentos
            ->waitFor('select[name="medicamento_id"] option:nth-child(2)', 10)  // Espera pela opção
            ->click('select[name="medicamento_id"] option:nth-child(2)')  // Seleciona a segunda opção

            ->press('button[type="submit"]')  // Salva o novo registro
            ->waitForText('Lote Dusk Test', 15)
            ->screenshot('estoque_adicionado');
    });
}



    /**
     * Testa a edição de um registro de estoque existente.
     */
    /*
    public function testEditEstoque()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/estoque')
                ->waitForText('Lote Dusk Test', 15)  // Espera o registro existir
                ->with('.estoque-item:contains("Lote Dusk Test")', function ($row) {
                    $row->click('button:contains("Editar")');  // Clica no botão "Editar"
                })
                ->waitFor('.modal', 15)
                ->type('input[name="lote"]', 'Lote Editado Dusk')  // Edita o lote
                ->press('button[type="submit"]')  // Salva as alterações
                ->waitForText('Lote Editado Dusk', 15)
                ->screenshot('estoque_editado');
        });
    }
    */

    /**
     * Testa a exclusão de um registro de estoque.
     */
    /*
    public function testDeleteEstoque()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/estoque')
                ->waitForText('Lote Editado Dusk', 15)
                ->with('.estoque-item:contains("Lote Editado Dusk")', function ($row) {
                    $row->click('button:contains("Excluir")');  // Clica no botão "Excluir"
                })
                ->pause(2000)  // Dá tempo para a exclusão ser processada
                ->assertDontSee('Lote Editado Dusk')  // Verifica se foi excluído
                ->screenshot('estoque_excluido');
        });
    }
    */
}
