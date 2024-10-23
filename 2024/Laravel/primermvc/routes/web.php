<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use Symfony\Component\HttpKernel\HttpCache\Esi;

Route::get('/estudiante', [EstudianteController::class, 'index'])->name('estudiante.index');
Route::get('/new', [EstudianteController::class, 'show'])->name('estudiante.show');
Route::post('/estudiante', [EstudianteController::class, 'store'])->name('estudiante.store');