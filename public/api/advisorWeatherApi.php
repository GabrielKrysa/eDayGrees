<?php
require_once 'advisorWeatherApiTokens.php';

class ADVIDOR_API
{

    private function request($id_city)
    {
        try {
            $token = ADIVIDOR_API_TOKEN_1;
            $url = "http://apiadvisor.climatempo.com.br/api/v1/weather/locale/" . $id_city . "/current?token=" . $token;
            $response = json_decode(file_get_contents($url));
        } catch (Exception $ex) {
            $response = null;
        }

        return $response; //decodifica o json e retorna
    }


    private function temperature($id_city)
    {
        $data = $this->request($id_city);
        return $data->data->temperature;
    }

    private function umidade($id_city)
    {
        $data = $this->request($id_city);
        return $data->data->humidity;
    }

    private function condicao($id_city)
    {
        $data = $this->request($id_city);
        return $data->data->condition;
    }

    private function getClima($id_city)
    {
        $data = $this->request($id_city);
        $clima = array(
            'temp' => $data->data->temperature,
            'humi' => $data->data->humidity,
            'cond' => $data->data->condition
        );


        return $clima;
    }

    function requestWeather($city_name, $state)
    {
        $id = $this->descobrir_id_cidade($city_name, $state);

        return $this->getClima($id);
    }

    private function descobrir_id_cidade($nome_cidade, $estado)
    {
        $token = ADIVIDOR_API_TOKEN;
        $url = "http://apiadvisor.climatempo.com.br/api/v1/locale/city?name=" . $nome_cidade . "&state=" . $estado . "&token=" . $token;

        try {

            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => str_replace(' ', '%20', $url),
                CURLOPT_USERAGENT => 'Codular Sample cURL Request'
            ]);

            // Send the request & save response to $resp
            $resp = curl_exec($curl);

            curl_close($curl);

            $response = json_decode($resp); //o @ significa que ele ignorar se der erro

        } catch (Exception $ex) {
            $response = null;
        }

        return $response[0]->id;
    }


}

?>
