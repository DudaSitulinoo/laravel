<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\CulturaController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\GraficoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});


Route::resource('culturas', CulturaController::class);
Route::resource('areas', AreaController::class);
Route::resource('insumos', InsumoController::class);
Route::resource('atividades', AtividadeController::class);
Route::resource('grafico', GraficoController::class);
