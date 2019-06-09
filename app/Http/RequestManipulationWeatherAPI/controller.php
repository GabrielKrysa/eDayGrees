<?php
namespace Controller\clima;
class controller{
    
    function requestCitys(){
        $con = new Model();
        $cidades = $con-> selectCitysAndStates();
       

      
        return $cidades;
    }
}
