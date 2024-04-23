<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcesController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [ProcesController::class, 'home'])->name('home');
Route::get('/kalkulator', [ProcesController::class, 'index'])->name('kalkulator');
Route::get('/kalkulatorjs', [ProcesController::class, 'javascript'])->name('kalkulatorjs');
Route::post('hitung', [ProcesController::class, 'input'])->name('hitung');
