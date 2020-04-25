<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Estado;

class CitiesController extends Controller
{
    public function getCitiesFromState($state)
    {
        $state = Estado::where('nome', $state)->first();
        if ($state == null) {
            $response['success'] = true;
            $response['message'] = "Error";
        } else {
            $cities = Cidade::where('state_id', $state->id)->get();
            $response['success'] = true;
            $response['data'] = $cities;
        }

        echo json_encode($response);
    }
}
