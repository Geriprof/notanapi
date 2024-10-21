<?php

use App\Http\Controllers\Api\Authcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("login", [Authcontroller::class, "login"]);
Route::post("logout", [Authcontroller::class, "logout"]);
