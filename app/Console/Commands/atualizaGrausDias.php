<?php

namespace App\Console\Commands;

use App\Http\Controllers\GrausDiasController;
use Illuminate\Console\Command;

class atualizaGrausDias extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:atualizaGrausDias';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $gd = new GrausDiasController();
        $gd->atualizaGrausDias();
    }
}
