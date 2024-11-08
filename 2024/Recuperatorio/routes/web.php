<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsingController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[AsingController::class,"index"])->name("asing.index");
Route::post("/cargarRegistro",[AsingController::class,"store"])->name("asing.store");
Route::put("/editarRegistro{id}",[AsingController::class,"update"])->name("asing.update");
Route::delete("/eliminarRegistro{id}",[AsingController::class,"destroy"])->name("asing.delete");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
