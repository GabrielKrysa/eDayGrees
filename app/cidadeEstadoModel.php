<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cidadeEstadoModel extends Model
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
        $mysqli = $this->connectDB();

        $query = 'SELECT id, nome FROM estado';
        $resultQuery = $mysqli->query($query);

        while ($dado = $resultQuery->fetch_array()) { 
            $data[] = utf8_encode($dado['nome']);
        }
        
        mysqli_close($mysqli);

        return $data;
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