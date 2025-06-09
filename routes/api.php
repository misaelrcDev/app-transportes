<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtapaController;
use App\Http\Controllers\FreteController;
use App\Http\Controllers\ClienteController;

Route::get('/ola', function () {
    return response()->json(['message' => 'Hello, World!']);
});

Route::post('/clientes', [ClienteController::class, 'store']);
Route::post('/fretes', [FreteController::class, 'store']);
Route::post('/etapas', [EtapaController::class, 'store']);
