<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{AreasController,PersonasController};
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/home', [LoginController::class, 'login'])->name('login');


Route::get("/legajo",[PersonasController::class, "index"])->name("personas.index");

Route::get("/CrearLegajo", [PersonasController::class, "create"])->name("personas.create");
Route::post("/cargarLegajo",[PersonasController::class, "store"])->name("personas.store");

Route::delete("/eliminarLegajo{id}",[PersonasController::class, "destroy"])->name("personas.destroy");

Route::get('/editarLegajo{id}', [PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/actualizarLegajo', [PersonasController::class, 'update'])->name('personas.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
