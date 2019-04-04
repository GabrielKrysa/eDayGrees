<?php 
require_once 'app/config/config.php';
class ADVIDOR_API{

    private function request($id_city)    {
        $token = ADIVIDOR_API_TOKEN;
        $url = "http://apiadvisor.climatempo.com.br/api/v1/weather/locale/".$id_city."/current?token=".$token;
        $response = json_decode(file_get_contents($url)); //o @ significa que ele ignorar se der erro

        return $response; //decodifica o json e retorna 
    }


    function temperature($id_city)    { 

        $data = $this->request( $id_city);
        return $data->data->temperature;
    }

    function umidade( $id_city)    { 
        $data = $this->request( $id_city);
        return $data->data->humidity;
    }

    function condicao( $id_city)    { 
        $data = $this->request( $id_city);
        return $data->data->condition;
    }

    function getClima($id_city){
        $data = $this->request($id_city);
        $clima = array(
        'temp' => $data->data->temperature,
        'humi'=> $data->data->humidity,
        'cond' => $data->data->condition
        );


        return $clima;
    }

    function descobrir_id_cidade($nome_cidade, $estado){
        $token = ADIVIDOR_API_TOKEN;
        $url = "http://apiadvisor.climatempo.com.br/api/v1/locale/city?name=".$nome_cidade. "&state=".$estado."&token=".$token;

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => str_replace(' ', '%20', $url),
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ]);

        // Send the request & save response to $resp
        $resp = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($resp); //o @ significa que ele ignorar se der erro^
        
        return $response[0]->id;
    }


}

 ?>