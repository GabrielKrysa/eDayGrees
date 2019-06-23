<?php

namespace App\Console\Commands;

use App\Http\Controllers\ClimaController;
use App\Propriedade;
use Illuminate\Console\Command;


class RegistraClima extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:registraClima';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Captura e registra dados climaticos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $climaController = new ClimaController();
        $modelPropriedade = new Propriedade();

        $cidadesEstados = $modelPropriedade->getCidadeEstado();

        foreach ($cidadesEstados as $ce) {
            $dadosClimaticos[] = $climaController->getRequestWeather($ce->cidade, $ce->estado);
        }

        foreach ($dadosClimaticos as $dados) {
            $climaController->salvaClima($dados);
        }
    }
}
