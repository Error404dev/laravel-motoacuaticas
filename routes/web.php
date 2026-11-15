<?php

use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\MotoAcuaticaController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/motos');

Route::resource('motos', MotoAcuaticaController::class)
    ->except('show')
    ->parameters(['motos' => 'moto']);

Route::resource('alquileres', AlquilerController::class)
    ->except('show')
    ->parameters(['alquileres' => 'alquiler']);
