<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use capturaClima\capturaClima;
use Controller\clima\controller;
use model\Clima\ModelClima;
use api\clima\ADVIDOR_API;

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
        $controller = new controller();

        $cidadesEstados = $controller->requestCitys();

        $insert = new ModelClima();
        $h = array(
            'temp' => 12,
            'umi' => 12,
            'cond' => 'ceu aberto',
            'nome' => 'aqui',
            'estado' => 'aqui tb'
        );

        $insert->insertClima($h);

        $tamanho = count($cidadesEstados);

        $cidades = array();
        $estados = array();
        $k = 0;


        for ($i = 0; $i < $tamanho; $i = $i + 2) {
            $cidades[$k] = $cidadesEstados[$i];
            $estados[$k] = $cidadesEstados[$i + 1];
            $k++;
        }


        $api_request = new ADVIDOR_API();
        date_default_timezone_set('America/Sao_Paulo');

        for ($i = 0; $i < $tamanho / 2; $i++) {
            $clima[] = $api_request->requestWeather($cidades[$i], $estados[$i]);
        }

        for ($i = 0; $i < count($clima); $i++) {
            $insert->insertClima($clima[$i]);
        }

    }
}
