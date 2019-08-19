<?php

namespace App\Console\Commands;

use App\Clima;
use Illuminate\Console\Command;
use model\Clima\ModelClima;

class limparTabela extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:limpaTabela';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command que limpa a tabela auxiliar de clima';

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
        $climaModel = new Clima();
        $climaModel->deleteAuxClima();
    }
}
