<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileDosController;


Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    // Ruta principal (dashboard que lista los perfiles)
    Route::get('/dashboard', [ProfileDosController::class, 'index'])->name('dashboard');

    // Rutas para ProfileDos
    Route::get('/profileDos', [ProfileDosController::class, 'index'])->name('profileDos.index'); // Listar
    Route::get('/profileDos/create', [ProfileDosController::class, 'create'])->name('profileDos.create'); // Crear
    Route::post('/profileDos', [ProfileDosController::class, 'store'])->name('profileDos.store'); // Guardar
    Route::get('/profileDos/{profileDos}', [ProfileDosController::class, 'show'])->name('profileDos.show'); // Ver detalle
    Route::get('/profileDos/{profileDos}/edit', [ProfileDosController::class, 'edit'])->name('profileDos.edit'); // Editar
    Route::put('/profileDos/{profileDos}', [ProfileDosController::class, 'update'])->name('profileDos.update'); // Actualizar
    Route::delete('/profileDos/{profileDos}', [ProfileDosController::class, 'destroy'])->name('profileDos.destroy'); // Eliminar
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
