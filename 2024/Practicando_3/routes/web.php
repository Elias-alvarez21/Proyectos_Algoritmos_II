<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/",[TareasController::class,"index"])->name("tareas.index");
Route::get("/crearTarea",[TareasController::class,"create"])->name("tareas.create");
Route::post("/tareaCargada",[TareasController::class,"store"])->name("tareas.store");
Route::get("/editarTarea{id}",[TareasController::class,"edit"])->name("tareas.edit");
Route::put("/ActualizarTarea{id}",[TareasController::class,"update"])->name("tareas.update");
Route::delete("eliminarTarea{id}",[TareasController::class,"destroy"])->name("tareas.destroy");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
