<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FarmaceuticoTest extends DuskTestCase
{
    /**
     * Testa a navegação para a página de farmacêuticos.
     */
    public function testNavigateToFarmaceuticos()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/farmaceuticos')
                ->waitForText('Farmacêuticos', 15)
                ->assertSee('Farmacêuticos')
                ->screenshot('pagina_farmaceuticos');
        });
    }

    /**
     * Testa a criação de um novo farmacêutico.
     */
    public function testCreateFarmaceutico()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/farmaceuticos')
                ->waitFor('button.btn-primary', 15)
                ->click('button.btn-primary')  // Abre o modal
                ->waitFor('.modal', 15)
                ->type('input[name="id_func"]', '12345')
                ->type('input[name="CRF"]', '98765')
                ->press('button[type="submit"]')  // Submete o formulário
                ->waitForText('98765', 15)
                ->screenshot('farmaceutico_adicionado');
        });
    }

    /**
     * Testa a edição de um farmacêutico existente.
     */
}
