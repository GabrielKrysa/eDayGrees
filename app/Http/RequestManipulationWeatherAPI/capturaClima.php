<?php
namespace capturaClima;
include('controller.php');
include('IA.php');
include('app/Http/RequestManipulationWeatherAPI/api/advisorWeatherApi.php');

class capturaClima{

    function capturarInserirClima()
    {
        ini_set('max_execution_time', 30); //300 seconds = 5 minutes
        $controller = new controller();

        $cidadesEstados = $controller->requestCitys();
        $insert = new Model();

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

        $contador = 0;
        for ($i = 0; $i < $tamanho / 2; $i++) {
            $clima[] = $api_request->requestWeather($cidades[$i], $estados[$i]);
        }

        for ($i = 0; $i < count($clima); $i++) {
            $insert->insertClima($clima[$i]);
        }
    }
}
