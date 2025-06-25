<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EtapaController;
use App\Http\Controllers\FreteController;
use App\Models\Frete;
use Illuminate\Support\Facades\Route;

Route::get('/ola', function(){
    return "olá mundo";
});

Route::post('/clientes', [ClienteController::class, 'store']);
Route::post('/fretes', [FreteController::class, 'store']);
Route::post('/etapa', [EtapaController::class, 'store']);