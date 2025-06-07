<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/ola', function () {
    return response()->json(['message' => 'Hello, World!']);
});

Route::post('/clientes', [ClienteController::class, 'store']);
