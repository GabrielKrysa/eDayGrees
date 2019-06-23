<?php

namespace App\Http\Controllers;

use App\Clima;
use PHPUnit\Runner\Exception;

define('ADIVIDOR_API_TOKEN_1', '5f783e9a2377267db617eb2d735bf968');

class ClimaController extends Controller
{
    function getRequestWeather($cidade, $estado)
    {
        $id = $this->idCidade($cidade, $estado);
        $clima = $this->getClima($id);
        return $clima;
    }

    private function getClima($idCidade)
    {
        $data = $this->apiRequest($idCidade);

        $clima = array(
            'temperatura' => $data->data->temperature,
            'umidade' => $data->data->humidity,
            'condicao' => $data->data->condition,
            'cidade' => $data->name,
            'estado' => $data->state
        );

        return $clima;
    }

    private function idCidade($nome_cidade, $estado)
    {
        $token = ADIVIDOR_API_TOKEN_1;
        $url = "http://apiadvisor.climatempo.com.br/api/v1/locale/city?name=" . $nome_cidade . "&state=" . $estado . "&token=" . $token;

        try {
            $url = str_replace(' ', '%20', $url);
            $response = json_decode(file_get_contents($url));
        } catch (Exception $ex) {
            echo $ex;
            $response = null;
        }

        return $response[0]->id;
    }

    private function apiRequest($id_city)
    {
        try {
            $token = ADIVIDOR_API_TOKEN_1;
            $url = "http://apiadvisor.climatempo.com.br/api/v1/weather/locale/" . $id_city . "/current?token=" . $token;
            $response = json_decode(file_get_contents($url));
        } catch (Exception $ex) {
            $response = null;
        }

        return $response;
    }

    function salvaClima($dadosClimaticos)
    {
        $modelClima = new Clima();
        $modelClima->insertAuxClima($dadosClimaticos);
    }

    function calculaSalvaMediaDiariasDeClima()
    {
        $climaModel = new Clima();
        $cidadeEstado = $climaModel->selectCidadesEstados();

        foreach ($cidadeEstado as $ce) {
            $dadosClimaticos = $climaModel->selectClimaPorCidade($ce->cidade, $ce->estado);

            $condicao = "";
            $umidadeMedia = 0;
            $umidadeMax = -2500;
            $umidadeMin = 2500;
            $temperaturaMedia = 0;
            $temperaturaMax = -2500;
            $temperaturaMin = 2500;

            for ($i = 0; $i < 6; $i++) {
                if ($dadosClimaticos[$i]->temperatura > $temperaturaMax) {
                    $temperaturaMax = $dadosClimaticos[$i]->temperatura;
                }

                if ($dadosClimaticos[$i]->temperatura < $temperaturaMin) {
                    $temperaturaMin = $dadosClimaticos[$i]->temperatura;
                }

                if ($dadosClimaticos[$i]->umidade > $umidadeMax) {
                    $umidadeMax = $dadosClimaticos[$i]->umidade;
                }

                if ($dadosClimaticos[$i]->umidade < $umidadeMin) {
                    $umidadeMin = $dadosClimaticos[$i]->umidade;
                }

                $temperaturaMedia += $dadosClimaticos[$i]->temperatura;
                $umidadeMedia += $dadosClimaticos[$i]->umidade;
                $condicao = $dadosClimaticos[$i]->condicao;
            }

            $temperaturaMedia = $temperaturaMedia / 6;
            $umidadeMedia = $umidadeMedia / 6;
            $data = date("j/m/Y");

            $dados = [
                "temperaturaMaxima" => $temperaturaMax,
                "temperaturaMinima" => $temperaturaMin,
                "temperaturaMedia" => $temperaturaMedia,
                "condicao" => $condicao,
                "umidadeRelativa" => $umidadeMedia,
                "data" => $data,
                "cidade" => $ce->cidade,
                "estado" => $ce->estado
            ];

            $climaModel->insertClima($dados);
        }
    }
}
