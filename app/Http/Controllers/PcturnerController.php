<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class PcturnerController extends Controller
{
    public function turnOn()
    {
        $client = new Client();
        $response = $client->post('http://192.168.0.107/turn-pc-on');

        echo $response->getBody();
    }
    public function turnOff() {}
}
