<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DynamicDependent extends Controller
{
    function index()
    {
        $country_list = DB::table('estados')
            ->get();

        return view('cultivarsRegister')->with('country_list', $country_list);
    }

    function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');

        $data = DB::table('cidades')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();

        $output = '<option value="">Select ' . ucfirst($dependent) . '</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->$dependent . '">' . $row->$dependent . '</option>';
        }
        dd("CHEGUEI");
        echo $output;
    }
}
