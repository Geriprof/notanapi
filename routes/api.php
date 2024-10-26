<?php

use App\Http\Controllers\Api\Authcontroller;
use App\Http\Controllers\PcturnerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/turn-off-pc', [AuthController::class, 'turnOff']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
Route::post('/turn-on-pc', [PcturnerController::class, 'turnOn']);
Route::post("login", [Authcontroller::class, "login"]);
