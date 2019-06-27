<?php

namespace App;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
    function register($array)
    {
        $user = new User();
        $cidadeEstado = new CidadeEstado();

        $array['idproprietario'] = $user->getUsername($array['nomeProprietario']);

        $colunas = array();

        $colunas['cidade'] = $cidadeEstado->getCidadeId($array['cidade']);
        $colunas['estado'] = $cidadeEstado->getEstadoId($array['estado']);
        $colunas['nome_propriedade'] = $array['nomePropriedade'];
        $colunas['id_proprietario'] = $array['idproprietario'];
        $colunas['id_cultivar'] = $array['cultivar'];
        $colunas['status'] = 'nao definido';
        $colunas['Acumulo_graus'] = 0;

        try {
            if (DB::table('propriedade')->insert($colunas)) {
                return true;
            } else {
                return false;
            }
        } catch (QueryException $e) {
            dd($e);
        }
    }

    function getPro($idd)
    {

        $prop = DB::table('proprietario')->select('id')->where('id', '=', $idd)->get();

        return $prop[0]->id;
    }

    function atualizaGrausAcumulado($id, $calculo, $soma) // chama sempre a atualizacao de graus depois fazemos as verificacoes de status, deixei separado para ficar mais completo, mas ambas podem ser feitas dentro de um for com os memos parametros passados um para o outro
    {
        DB::table('propriedade')->where('id', '=', $id)->update(['Acumulo_graus' => $calculo]); //atualizacao de graus dia da propriedade

        $this->verificaStatus($id, $calculo); // chamada de funcao para atualizacao dos status caso verdadeiro, fazendo assim não precisamos chamar as duas, somente a de atualizacao
    }

    function verificaStatus($id, $soma) // esse calculo e o valor de graus dia pela conta feita no dia pelo sistema
    {

        $relato = new Relatorio();

        $acumuloAttPropriedade = DB::table('propriedade')->select('Acumulo_graus')->where('id', '=', $id)->get(); // seleciona acumulo de graus das propriedades pelo id
        $idCult = DB::table('propriedade')->select('id_cultivar')->where('id', '=', $id)->get(); // seleciona id da cultivar que temos na propriedade, assim podemos comparar o acumulo de graus da propriedade com os ciclos que temos na cultivar
        $desc = "";
        $oqueFazer = "";
        $status = "";
        //falta fazer as requisicoes para uma funcao que manda para o relatorio a cada mudanca de ciclo dentro do sistema apois o if constatar verdadeiro

        $valores = DB::table('cultivar')->select('gemaAlgodao', 'brotacao', 'florescimento', 'aparecimentoInflorescencia', 'inicioMaturacao', 'colheita')->where('id', '=', $idCult[0]->id_cultivar)->get();

        if ($acumuloAttPropriedade[0]->Acumulo_graus >= $valores[0]->colheita) {
            $status = "Colheita";
            $desc = "mudanca de status da cultivar para videira pronta para colheita";
            $oqueFazer = "continuar bom gerenciamento da planta";
        } else if ($acumuloAttPropriedade[0]->Acumulo_graus >= $valores[0]->inicioMaturacao) {
            $status = "Inicio maturação";
            $desc = "mudanca de status da cultivar para inicio maturacao";
            $oqueFazer = "continuar bom gerenciamento da planta";
        }
        if ($acumuloAttPropriedade[0]->Acumulo_graus >= $valores[0]->florescimento) {
            $status = "Florecimento";
            $desc = "mudanca de status da cultivar para florescimento";
            $oqueFazer = "continuar bom gerenciamento da planta";
        } else if ($acumuloAttPropriedade[0]->Acumulo_graus >= $valores[0]->aparecimentoInflorescencia) {
            $status = "Aparecimento de inflorescencia";
            $desc = "mudanca de status da cultivar para aparecimento da inflorescencia";
            $oqueFazer = "continuar bom gerenciamento da planta";
        } else if ($acumuloAttPropriedade[0]->Acumulo_graus >= $valores[0]->brotacao) {
            $status = "Brotação";
            $desc = "mudanca de status da cultivar para brotacao";
            $oqueFazer = "continuar bom gerenciamento da planta";
        } else if ($acumuloAttPropriedade[0]->Acumulo_graus >= $valores[0]->gemaAlgodao) {
            $status = "gema algodao";
            $desc = "mudanca de status da cultivar para gema algodao";
            $oqueFazer = "continuar bom gerenciamento da planta";
        }

        if ($desc != "") {
            DB::table('propriedade')->where('id', '=', $id)->update(['status' => $status]);
            $relato->guardaRelatorio($id, $desc, $oqueFazer);
        }

        $date = date("j/m/Y");

        $data = [
            'descricao' => "Sua cultivar teve um ganho de " . $soma . " Graus-Dias",
            'oQueFazer' => "Nada a ser feito ainda. Cultivar em evolução.",
            'propriedade_id' => $id,
            'data' => $date
        ];

        $relato->atualizacaoGD($data);

    }

    function getCidadeEstado()
    {
        $cidadesEstados = DB::table('propriedade')->select('cidade', 'estado')->distinct()->get();

        return $cidadesEstados;
    }

    function returnIdPorNomePropriedade($nome)
    {
        $id = DB::table('propriedade')->select('id')->where('nome_propriedade', '=', $nome)->get();
        return $id[0]->id;
    }
}
