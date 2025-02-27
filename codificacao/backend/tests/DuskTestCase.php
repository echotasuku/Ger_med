<?php

namespace Tests;

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Laravel\Dusk\TestCase as BaseTestCase;
use PHPUnit\Framework\Attributes\BeforeClass;

abstract class DuskTestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Prepare for Dusk test execution.
     */
    #[BeforeClass]
    public static function prepare(): void
    {
        if (! static::runningInSail()) {
            static::startChromeDriver([ 
                '--port=56709',
                '--disable-dev-shm-usage',
                '--no-sandbox', // Necessário para execução em containers, como no GitHub Actions
                '--disable-gpu', // Necessário em alguns ambientes como CI
                //'--headless', // Deixe o Chrome rodando em modo headless
                '--user-data-dir=/tmp/dusk-user-data-dir', // Diretório único para os dados do usuário
            ]);
        }
    }

    /**
     * Create the RemoteWebDriver instance.
     */
    protected function driver(): RemoteWebDriver
    {
        $options = (new ChromeOptions)->addArguments(collect([
            $this->shouldStartMaximized() ? '--start-maximized' : '--window-size=1920,1080',
            '--disable-search-engine-choice-screen',
            '--disable-gpu',
            //'--headless', // Deixe o Chrome rodando em modo headless
            '--user-data-dir=/tmp/dusk-user-data-dir', // Diretório único para os dados do usuário
        ])->all());

        // Verificar se o ambiente está no GitHub Actions (CI) e definir a URL do WebDriver
        $driverUrl = getenv('CI') ? 'http://host.docker.internal:56709' : ($_ENV['DUSK_DRIVER_URL'] ?? env('DUSK_DRIVER_URL') ?? 'http://localhost:56709');

        return RemoteWebDriver::create(
            $driverUrl, // Usar o WebDriver correto
            DesiredCapabilities::chrome()->setCapability(
                ChromeOptions::CAPABILITY, $options
            )
        );
    }

    /**
     * Define the base URL for your application.
     *
     * @return string
     */
    protected function baseUrl()
    {
        // Verificar se o ambiente está no GitHub Actions (CI) e definir a URL da aplicação
        return getenv('CI') ? 'http://host.docker.internal:3000' : env('BASE_URL', 'http://localhost:3000');
    }
}
