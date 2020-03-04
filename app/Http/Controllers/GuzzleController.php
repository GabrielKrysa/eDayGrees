<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class GuzzleController extends Controller
{
    public static function guzzle($url_feed)
    {
        $client = new Client([
            'headers' => [
                'api_key' => '8D7034',
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
        ]);

        $response = $client->get($url_feed);

        $data = json_decode($response->getBody(), true);

        return $data;
    }
}
