<?php
require_once 'advisorWeatherApi.php';

class REQUEST_API
{

    private $data = array();

    public function requestTotalWeather($cityName, $state)
    {
        $advidorApi = new ADVIDOR_API;
        $data = $advidorApi->requestWeather($cityName, $state);
        $this->returnWeather();
    }

    private function returnWeather()
    {
        return $this->weather;
    }

}

?>
