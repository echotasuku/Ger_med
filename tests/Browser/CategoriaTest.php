<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoriaTest extends DuskTestCase
{
    /**
     * Testa a navegação para a página de categorias.
     */
    public function testNavigateToCategorias()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/categorias')
                ->waitForText('Categorias', 15)
                ->assertSee('Categorias')
                ->screenshot('pagina_categorias');
        });
    }

    /**
     * Testa a criação de uma nova categoria.
     */
    public function testCreateCategoria()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/categorias')
                ->waitFor('button.btn-primary', 15)
                ->click('button.btn-primary')
                ->waitFor('.modal', 15)
                ->type('input[name="nome"]', 'Nova Categoria Dusk')
                ->type('input[name="descricao"]', 'Descrição da categoria Dusk')
                ->press('button[type="submit"]')
                ->waitForText('Nova Categoria Dusk', 15)
                ->screenshot('categoria_adicionada');
        });
    }

    /**
     * Testa a edição de uma categoria existente.
     */
    public function testEditCategoria()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/categorias')
                ->waitForText('Nova Categoria Dusk', 15) // Espera que a categoria exista
                ->click('button.btn-info') // Clique no botão "Editar"
                ->waitFor('.modal', 15)
                ->type('input[name="nome"]', 'Nova Categoria Dusk') // Preenche o nome novamente
                ->type('input[name="descricao"]', 'Descrição da categoria Dusk') // Preenche a descrição novamente
                ->press('button[type="submit"]') // Clica no botão de salvar alterações
                ->waitForText('Nova Categoria Dusk', 15) // Verifica se a categoria ainda aparece na lista
                ->screenshot('categoria_editada');
        });
    }

    /**
     * Testa a exclusão de uma categoria.
     */
    public function testDeleteCategoria()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/categorias')
               ->waitForText('Nova Categoria Dusk', 40) // Espera a categoria editada
                ->click('button.ms-2.btn.btn-danger') // Clique no botão "Excluir"
                ->waitUntilMissingText('Nova Categoria Dusk', 15) // Espera que a categoria desapareça
                ->screenshot('categoria_excluida');
        });
    }
}
