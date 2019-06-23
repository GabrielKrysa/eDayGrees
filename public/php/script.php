<?php

use Illuminate\Support\Facades\DB;

class selects
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

    function selectState()
    {
        $state = DB::table('estado')->select('id', 'nome')->get();

        return $state;
    }

    function selectVideiras()
    {
        $videira = DB::table('cultivar')->select('id', 'cultivar')->get();

        return $videira;
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

    private function getNomePropriedade($idPropriedade)
    {
        $nome = DB::table('propriedade')->select('nome_propriedade')->where('id', '=', $idPropriedade)->get();
        return $nome[0]->nome_propriedade;
    }

    function selectRelatorio($idProprietario)
    {
        $idPropriedade = $this->getPropriedades($idProprietario);
        $relatorio = DB::table('relatorio')->select('propriedade_id', 'descricao', 'oQueFazer','data')->where('propriedade_id', '=', $idPropriedade[0]->id)->get();


        for ($i = 0; $i < count($relatorio); $i++) {
            $relatorio[$i]->nome_propriedade = $this->getNomePropriedade($relatorio[$i]->propriedade_id);
        }

        return $relatorio;
    }

    private function getPropriedades($id)
    {
        $id = DB::table('propriedade')->select('id')->where('id_proprietario', '=', $id)->get();
        return $id;
    }

    function getPerguntas()
    {
        $perguntas = DB::table('perguntas_de_seguranca')->select('id', 'perguntas')->get();

        return $perguntas;
    }

    function selectIdUser()
    {
        return auth()->user()->id;
    }
}
