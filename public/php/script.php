<?php

use Illuminate\Support\Facades\DB;
class cidadeEstadoModel 
{
    function connectDB(){
        $host = "localhost";
        $user = "root";
        $pasword = "";
        $db = "teste";
        $mysqli = new mysqli($host, $user, $pasword, $db) or die;
       
        return $mysqli;
    }

    function selectState()
    {
        $state = DB::table('estado')->select('id', 'nome')->get();
        
        /*$mysqli = $this->connectDB();

        $query = 'SELECT id, nome FROM estado';
        $resultQuery = $mysqli->query($query);

        while ($dado = $resultQuery->fetch_array()) { 
            $data[] = utf8_encode($dado['nome']);
        }
        
        mysqli_close($mysqli);*/

        return $state;
    }

    function selectCity($id)
    {
        $mysqli = $this->connectDB();

        $query = 'SELECT nome FROM cidade WHERE estado_id = ' . $id;
        $resultQuery = $mysqli->query($query);

        while ($dado = $resultQuery->fetch_array()) { 
            $data[] = utf8_encode($dado['nome']);
        }
        
        mysqli_close($mysqli);
       


        return $data;
    }


}
