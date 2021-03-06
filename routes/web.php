<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;

Route::get('mensaje',[EmpleadosController::class,'mensaje']);
Route::get('controlpago',[EmpleadosController::class,'pago']);
Route::get('nomina/{diast}/{pago}',[EmpleadosController::class,'nomina']);
Route::get('muestrasaludo/{nombre}/{diast}',[EmpleadosController::class,'saludo']);
Route::get('salir',[EmpleadosController::class,'salir'])->name('salir');

Route::get('vb',[EmpleadosController::class,'vb'])->name('vb');
Route::get('vista1',[EmpleadosController::class,'vista1'])->name('vista1');
Route::get('vista2',[EmpleadosController::class,'vista2'])->name('vista2');



Route::get('/', function () {
    return view('welcome');
});
