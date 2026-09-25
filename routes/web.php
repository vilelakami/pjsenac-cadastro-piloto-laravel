<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotoController;

Route::get('/', function () {
    return redirect()->route('pilotos.index');
});

Route::get('/pilotos', [PilotoController::class, 'index'])->name('pilotos.index');
Route::get('/piloto/create', [PilotoController::class, 'create'])->name('piloto.create');
Route::get('/piloto/{piloto}/edit', [PilotoController::class, 'edit'])->name('piloto.edit');
Route::post('/pilotos', [PilotoController::class, 'store'])->name('piloto.store');
Route::post('/piloto/{piloto}/update', [PilotoController::class, 'update'])->name('piloto.update');
Route::delete('/piloto/{piloto}/delete', [PilotoController::class, 'destroy'])->name('piloto.delete');
