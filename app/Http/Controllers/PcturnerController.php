<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PcturnerController extends Controller
{
    public function turnOn()
    {
        $response = Http::post('http://192.168.137.222/receive-data', [
            'data' => 'your-data-here'
        ]);

        if ($response->successful()) {
            // Handle success
        } else {
            // Handle failure
        }
    }
    public function turnOff() {}
}
