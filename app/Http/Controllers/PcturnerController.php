<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PcturnerController extends Controller
{
    public function turnOn(Request $request)
    { // Validate the incoming request
        $request->validate([
            'message' => 'required|string',
        ]);

        // Process the message (you can save it to a database or perform any other action)
        $message = $request->input('message');

        // Example: Log the message

        // Respond back to ESP32
        return response()->json([
            'status' => 'success',
            'message' => 'Message received successfully!',
        ]);
    }
    public function turnOff() {}
}
