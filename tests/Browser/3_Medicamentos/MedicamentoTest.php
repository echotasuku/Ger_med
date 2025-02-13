<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MedicamentoTest extends DuskTestCase
{
    /**
     * Testa a navegação para a página de medicamentos.
     */
    public function testNavigateToMedicamentos()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/medicamentos')
                ->waitForText('Medicamentos', 15)
                ->assertSee('Medicamentos')
                ->screenshot('pagina_medicamentos');
        });
    }

    /**
     * Testa a criação de um novo medicamento.
     */
    public function testCreateMedicamento()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/medicamentos')
                ->waitFor('.btn-add', 15)  // Espera pelo botão de "Adicionar Medicamento"
                ->click('.btn-add')        // Abre o modal
                ->waitFor('.modal', 15)    // Espera o modal aparecer
                ->type('input[name="nome"]', 'Medicamento Teste Dusk')
                ->type('input[name="descricao"]', 'Descrição Teste Dusk')
                ->click('select[name="fornecedor_id"]')  // Abre o dropdown de fornecedor
                ->waitFor('select[name="fornecedor_id"] option:nth-child(2)', 10)  // Aguarda a opção
                ->click('select[name="fornecedor_id"] option:nth-child(2)')  // Seleciona a opção do fornecedor
                ->click('select[name="categoria_id"]')  // Abre o dropdown de categoria
                ->waitFor('select[name="categoria_id"] option:nth-child(2)', 10)  // Aguarda a opção
                ->click('select[name="categoria_id"] option:nth-child(2)')  // Seleciona a opção da categoria
                ->type('input[name="tarja"]', 'Vermelha')
                ->check('input[name="generico"]')  // Marca como genérico
                ->type('input[name="laboratorio"]', 'Laboratório Dusk')
                ->type('input[name="dosagem"]', '500mg')
                ->type('input[name="via_administracao"]', 'Oral')
                ->press('button[type="submit"]')  // Submete o formulário
                ->waitForText('Medicamento Teste Dusk', 15)  // Verifica se foi adicionado à lista
                ->screenshot('medicamento_adicionado');
        });
    }

    /**
     * Testa a edição de um medicamento existente.
     */
    // public function testEditMedicamento()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/medicamentos')
    //             ->waitForText('Medicamento Teste Dusk', 15)  // Verifica se o medicamento está presente
    //             ->with('.medicamento-row:contains("Medicamento Teste Dusk")', function ($row) {
    //                 $row->click('.btn-edit');  // Clica no botão de "Editar"
    //             })
    //             ->waitFor('.modal', 15)  // Espera o modal abrir
    //             ->type('input[name="nome"]', 'Medicamento Editado Dusk')  // Altera o nome
    //             ->press('button[type="submit"]')  // Salva as alterações
    //             ->waitForText('Medicamento Editado Dusk', 15)  // Verifica a edição
    //             ->screenshot('medicamento_editado');
    //     });
    // }

    /**
     * Testa a exclusão de um medicamento.
     */
    // public function testDeleteMedicamento()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/medicamentos')
    //             ->waitForText('Medicamento Editado Dusk', 15)  // Verifica se o medicamento editado está presente
    //             ->with('.medicamento-row:contains("Medicamento Editado Dusk")', function ($row) {
    //                 $row->click('.btn-delete');  // Clica no botão de "Excluir"
    //             })
    //             ->pause(2000)  // Dá tempo para a exclusão ser processada
    //             ->assertDontSee('Medicamento Editado Dusk')  // Verifica se o medicamento foi removido
    //             ->screenshot('medicamento_excluido');
    //     });
    // }
}
