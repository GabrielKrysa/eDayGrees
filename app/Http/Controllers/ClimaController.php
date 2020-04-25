<?php

namespace App\Http\Controllers;

use App\Auxiliar_clima;
use App\Cadastro_cultivare;
use App\Clima;
use Illuminate\Support\Facades\Auth;

class ClimaController extends Controller
{
    private function weaterApiRequest($city)
    {
        $url_feed = "http://apiadvisor.climatempo.com.br/api/v1/weather/locale/$city/current?token=5f783e9a2377267db617eb2d735bf968";
        return GuzzleController::guzzle($url_feed);
    }

    private function cityApiRequest($cityname, $state)
    {
        $url_feed = "http://apiadvisor.climatempo.com.br/api/v1/locale/city?name=$cityname&state=$state&token=5f783e9a2377267db617eb2d735bf968";
        return GuzzleController::guzzle($url_feed);
    }

    public function saveCurrentWeater()
    {
        $locals = Cadastro_cultivare::where('id_proprietario', Auth::user()->id)
            ->with(['cidade', 'estado'])
            ->distinct()
            ->get(['id_cidade', 'id_estado']);

        foreach ($locals as $item) {
            $tempCity = $item->cidade->nome;
            $tempState = $item->estado->sigla;
            $city = $this->cityApiRequest($tempCity, $tempState);
            $city_id = $city[0]["id"];
            $weaterData = $this->weaterApiRequest($city_id);
            Auxiliar_clima::create([
                'temperatura' => $weaterData['data']['temperature'],
                'umidade' => $weaterData['data']['humidity'],
                'condicao' => $weaterData['data']['condition'],
                'cidade' => $item->cidade->id,
                'estado' => $item->estado->id,
            ]);
        }
    }

    public function saveDayWeater()
    {
        $auxWeater = Auxiliar_clima::distinct()->get(['cidade', 'estado']);
        foreach ($auxWeater as $item) {
            $weaterCity = Auxiliar_clima::where('cidade', $item->cidade)->get();
            $this->saveAvgWeaterFromDay($weaterCity);
        }
        Auxiliar_clima::truncate();
    }

    private function saveAvgWeaterFromDay($data)
    {
        $temperatureAvg = 0;
        $temperatureMin = 999;
        $temperatureMax = -999;
        $humudityAvg = 0;
        $tempCondition = [];

        foreach ($data as $datum) {
            if ($datum->temperatura > $temperatureMax) {
                $temperatureMax = $datum->temperatura;
            }
            if ($datum->temperatura < $temperatureMin) {
                $temperatureMin = $datum->temperatura;
            }

            $temperatureAvg += $datum->temperatura;
            $humudityAvg += $datum->umidade;
            $tempCondition[] = $datum->condicao;
        }
        $condition = "";
        foreach (array_count_values($tempCondition) as $key => $item) {
            $condition = $key;
            break;
        }

        Clima::create([
            'id',
            'temperaturaMaxima' => $temperatureMax,
            'temperaturaMinima' => $temperatureMin,
            'temperaturaMedia' => $temperatureAvg / count($data),
            'condicao' => $condition,
            'umidadeRelativa' => $humudityAvg / count($data),
            'data' => date('d/m/Y'),
            'cidade' => $data[0]->cidade,
            'estado' => $data[0]->estado
        ]);
    }
}
