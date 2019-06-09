<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use capturaClima\capturaClima;

class registraClima extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:resgistraClima';

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
        $captura = new capturaClima();
        $captura->capturarInserirClima();
    }
}
