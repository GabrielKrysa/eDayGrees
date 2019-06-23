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
        try{
            if (DB::table('propriedade')->insert($colunas)) {
                return true;
            } else {
                return false;
            }
        }catch (QueryException $e){
            dd($e);
        }
    }

    function getPro($idd)
    {

        $prop = DB::table('proprietario')->select('id')->where('id', '=', $idd)->get();

        return $prop[0]->id;
    }

    function atualizaGrausAcumulado($id, $calculo) // chama sempre a atualizacao de graus depois fazemos as verificacoes de status, deixei separado para ficar mais completo, mas ambas podem ser feitas dentro de um for com os memos parametros passados um para o outro
    {
        $prop = DB::table('propriedade')->select('Acumulo_graus')->where('id', '=', $id)->get(); // pego o graus dia total da minha propriedade

        $total = $prop[0]->Acumulo_graus + $calculo; // fazemos a soma para atualizacao dos graus dias dentro do banco de dados de determinada propriedade

        DB::table('propriedade')->update(['Acumulo_graus' => $total]); //atualizacao de graus dia da propriedade 

        $propriedade = new Propriedade();

        $propriedade->verificaStatus($id, $calculo); // chamada de funcao para atualizacao dos status caso verdadeiro, fazendo assim não precisamos chamar as duas, somente a de atualizacao 
    }

    function verificaStatus($id) // esse calculo e o valor de graus dia pela conta feita no dia pelo sistema
    {

        $relato = new Relatorio();

        $acumuloAttPropriedade = DB::table('propriedade')->select('Acumulo_graus')->where('id', '=', $id)->get(); // seleciona acumulo de graus das propriedades pelo id
        $idCult = DB::table('propriedade')->select('id_cultivar')->where('id', '=', $id)->get(); // seleciona id da cultivar que temos na propriedade, assim podemos comparar o acumulo de graus da propriedade com os ciclos que temos na cultivar

        //falta fazer as requisicoes para uma funcao que manda para o relatorio a cada mudanca de ciclo dentro do sistema apois o if constatar verdadeiro

        $valorGema = DB::table('cultivar')->select('gemaAlgodao')->where($idCult, '=', 'id')->get();
        if ($acumuloAttPropriedade >= $valorGema) {
            DB::table('propriedade')->update(['status' => 'gema algodao'])->where($id, '=', 'id');

            $desc = "mudanca de status da cultivar para gema algodao";
            $oqueFazer = "continuar bom gerenciamento da planta";
            $relato->guardaRelatorio($id, $desc, $oqueFazer);
        }


        $valorBrotacao = DB::table('cultivar')->select('brotacao')->where($idCult, '=', 'id') - get();
        if ($acumuloAttPropriedade >= $valorBrotacao) {
            DB::table('propriedade')->update(['status' => 'brotacao'])->where($id, '=', 'id');

            $desc = "mudanca de status da cultivar para brotacao";
            $oqueFazer = "continuar bom gerenciamento da planta";
            $relato->guardaRelatorio($id, $desc);
        }


        $valorFlorescimento = DB::table('cultivar')->select('florescimento')->where($idCult, '=', 'id')->get();
        if ($acumuloAttPropriedade >= $valorFlorescimento) {
            DB::table('propriedade')->update(['status' => 'florecimento'])->where($id, '=', 'id');

            $desc = "mudanca de status da cultivar para florescimento";
            $oqueFazer = "continuar bom gerenciamento da planta";
            $relato->guardaRelatorio($id, $desc);
        }


        $valorAInflorescencia = DB::table('cultivar')->select('aparecimentoInflorescencia')->where($idCult, '=', 'id')->get();
        if ($acumuloAttPropriedade >= $valorAInflorescencia) {
            DB::table('propriedade')->update(['status' => 'aparecimento inflorescencia'])->where($id, '=', 'id');

            $desc = "mudanca de status da cultivar para aparecimento da inflorescencia";
            $oqueFazer = "continuar bom gerenciamento da planta";
            $relato->guardaRelatorio($id, $desc);
        }


        $valorInicioMaturacao = DB::table('cultivar')->select('inicioMaturacao')->where($idCult, '=', 'id')->get();
        if ($acumuloAttPropriedade >= $valorInicioMaturacao) {
            DB::table('propriedade')->update(['status' => 'inicio maturacao'])->where($id, '=', 'id');

            $desc = "mudanca de status da cultivar para inicio maturacao";
            $oqueFazer = "continuar bom gerenciamento da planta";
            $relato->guardaRelatorio($id, $desc);
        }


        $valorColheita = DB::table('cultivar')->select('colheita')->where($idCult, '=', 'id')->get();
        if ($acumuloAttPropriedade >= $valorColheita) {
            DB::table('propriedade')->update(['status' => 'colheita'])->where($id, '=', 'id');

            $desc = "mudanca de status da cultivar para videira pronta para colheita";
            $oqueFazer = "continuar bom gerenciamento da planta";
            $relato->guardaRelatorio($id, $desc);
        }

    }

    function getCidadeEstado()
    {
        $cidadesEstados = DB::table('propriedade')->select('cidade','estado')->distinct()->get();

        return $cidadesEstados;
    }
}
