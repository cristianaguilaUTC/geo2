<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PredioController;
use App\Http\Controllers\AlarmaController;

Route::get('/', function () {
    return view('welcome');
});

//habilitando una ruta especifica para el mapa
Route::get("/clientes/mapa",[ClienteController::class,"mapa"]);

//habilitando el acceso a los recursos del controlador 
Route::resource("clientes",ClienteController::class);

//habilitando el acceso a los recursos del controlador predios
Route::resource("predios",PredioController::class);


Route::resource('alarmas',AlarmaController::class);