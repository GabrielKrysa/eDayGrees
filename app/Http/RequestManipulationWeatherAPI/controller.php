<?php
namespace Controller\clima;
use model\Clima\ModelClima;
class controller{
    
    function requestCitys(){
        $con = new ModelClima();

        $cidades = $con-> selectCitysAndStates();

        return $cidades;
    }
}
