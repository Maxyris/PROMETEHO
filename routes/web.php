<?php

use App\Http\Controllers\Citas\CitasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GestionConductores\GestionConductoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/gestionConductores', [GestionConductoresController::class,'index'])->middleware(['auth', 'verified'])->name('gestionConductores');

Route::get('/registrarPaciente', [CitasController::class,'index'])->name('registrarPaciente');
Route::get('/nuevaCita', [CitasController::class,'index'])->name('nuevaCita');
Route::get('/historialCitas', [CitasController::class,'index'])->name('historialCitas');


require __DIR__.'/auth.php';
