<?php

namespace model\Clima;

class ModelClima
{
    function connectDB()
    {
        $host = "localhost";
        $user = "root";
        $pasword = "";
        $db = "teste";
        $mysqli = new mysqli($host, $user, $pasword, $db) or die;

        return $mysqli;
    }

    function selectCitysAndStates()
    {
        $mysqli = $this->connectDB();

        $query = 'SELECT DISTINCT cidade,estado FROM propriedade';
        $resultQuery = $mysqli->query($query);

        while ($dado = $resultQuery->fetch_array()) {
            $data[] = utf8_encode($dado['cidade']);
            $data[] = utf8_encode($dado['estado']);
        }

        mysqli_close($mysqli);

        return $data;
    }

    function selectDoencas()
    {
        echo 'entrei';
        $mysqli = $this->connectDB();

        $query = 'SELECT * FROM doencas';
        $resultQuery = $mysqli->query($query);

        while ($dado = $resultQuery->fetch_array()) {
            $data[] = $dado;
        }

        mysqli_close($mysqli);

        return $data;
    }

    function insertClima($array)
    {
        $mysqli = $this->connectDB();
        $temperatura = $array['temp'];
        $umidade = $array['umi'];
        $condicao = utf8_decode($array['cond']);
        $nome = utf8_decode($array['nome']);
        $estado = utf8_decode($array['estado']);
        $timeStamp = date('d/m/y') . " " . date('H:i:s');


        $query = "INSERT INTO teste_clima (temperatura,umidade,condicao,cidade,estado,time_stamp) values($temperatura,$umidade,'$condicao','$nome','$estado','$timeStamp')";

        $mysqli->query($query);

        mysqli_close($mysqli);
    }
}
