<?php

namespace App\Http\Controllers;

use App\Cadastro_cultivare;
use App\Cidade;
use App\Cultivare;
use App\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CultivarCadastradoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('cultivarsRegister', ["estados" => Estado::all(), "cultivares" => Cultivare::all()]);
    }

    public function register(Request $request)
    {
        $errors = "";
        $data = $request->all();
        $cidadeTemp = $data['cidade'];
        $estadoTemp = $data['estado'];
        $cultivarTemp = $data['cultivar'];
        $cidadeTemp[0] = strtoupper($cidadeTemp[0]);
        $estadoTemp[0] = strtoupper($estadoTemp[0]);
        $cidade = Cidade::where('nome', $cidadeTemp)->first();
        $estado = Estado::where('nome', $estadoTemp)->first();
        $cultivar = Cultivare::where('cultivar', $cultivarTemp)->first();

        if ($cidade == null) {
            $errors .= "Essa cidade não existe. ";
        }

        if ($estado == null) {
            $errors .= "Esse estado não existe. ";
        }

        if ($estado != null && $cidade != null) {
            if ($cidade->state_id != $estado->id) {
                $errors .= "Essa cidade não pertence a esse estado. ";
            }
        }

        if ($cultivar == null) {
            $errors .= "Cultivar inválido. ";
        }
        if (!empty($errors)) {
            return redirect('/cultivar/cadastro')->with(['errors' => $errors]);
        } else {
            $create = Cadastro_cultivare::firstOrCreate([
                'id_cidade' => $cidade->id,
                'id_estado' => $estado->id,
                'nome_propriedade' => $data['nome_propriedade'],
                'id_proprietario' => Auth::user()->id,
                'id_cultivar' => $cultivar->id,
                'status' => 'Cadastrado',
                'Acumulo_graus' => 0,
            ]);

            return redirect('/relatorio');
        }
    }
}
