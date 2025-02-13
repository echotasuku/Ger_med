<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RetiradaTest extends DuskTestCase
{
    /**
     * Testa a navegação para a página de retiradas.
     */
    public function testNavigateToRetiradas()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/retiradas')
                ->waitForText('Retiradas', 15)
                ->assertSee('Retiradas')
                ->screenshot('pagina_retiradas');
        });
    }

    /**
     * Testa a criação de uma nova retirada.
     */
    public function testCreateRetirada()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/retiradas')
                ->waitFor('button.btn-primary', 15)
                ->click('button.btn-primary')  // Abre o modal
                ->waitFor('.modal', 15)
                ->type('input[name="data"]', '20-12-2025')  // Corrige a data

                // Interação com o select de medicamentos
                ->click('select[name="medicamento_id"]')  // Abre o dropdown de medicamentos
                ->waitFor('select[name="medicamento_id"] option:nth-child(2)', 10)  // Espera pela opção
                ->click('select[name="medicamento_id"] option:nth-child(2)')  // Seleciona a opção

                // Interação com o select de farmacêuticos
                ->click('select[name="farmaceutico_id"]')  // Abre o dropdown de farmacêuticos
                ->waitFor('select[name="farmaceutico_id"] option:nth-child(2)', 10)  // Espera pela opção
                ->click('select[name="farmaceutico_id"] option:nth-child(2)')  // Seleciona a opção

                ->type('input[name="quantidade"]', '10')  // Insere a quantidade

                // Anexa a receita em JPG
                ->attach('input[name="receita"]', __DIR__ . '/../files/receita.jpg')

                ->press('button[type="submit"]')  // Salva a retirada
                ->screenshot('retirada_adicionada');
        });
    }
}
