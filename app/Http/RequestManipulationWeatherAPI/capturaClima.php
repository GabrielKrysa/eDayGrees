<?php
namespace capturaClima;
use Controller\clima\controller;
use model\Clima\ModelClima;
use api\clima\ADVIDOR_API;

class CapturaClima{

    function capturarInserirClima()
    {
//        ini_set('max_execution_time', 30); //300 seconds = 5 minutes
        $controller = new controller();

        $cidadesEstados = $controller->requestCitys();
        $insert = new ModelClima();
        $h = array(
            'temp' => 12,
            'umi'=> 12,
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
