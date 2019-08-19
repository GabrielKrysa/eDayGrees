<?php

namespace App\Console\Commands;

use App\Http\Controllers\ClimaController;
use Illuminate\Console\Command;

class calculaMediasDiarias extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:medias';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calcula e salva as medias climaticas diarias';

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

        $climaController->calculaSalvaMediaDiariasDeClima();
    }
}
