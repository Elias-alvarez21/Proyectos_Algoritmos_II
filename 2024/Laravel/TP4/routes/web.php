<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AutoresController,CategoriasController,LibrosController,VentasController,TP3Controller};
use Symfony\Component\HttpKernel\HttpCache\Esi;


Route::get("/libros",[LibrosController::class,"index"])->name("libros.index");
Route::get("/regLibro",[LibrosController::class,"create"])->name("libros.create");
Route::post("/cargLibro",[LibrosController::class,"store"])->name("libros.store");
#Route::get("/editLibro/{id}",[LibrosController::class,"edit"])->name("libros.edit");
#Route::get("/editLIbro/update",[LibrosController::class,"update"])->name("libros.update");
Route::get("/elimLibro{id}",[LibrosController::class,"destroy"])->name("libros.delete");
Route::get("/ventLibro{id}",[VentasController::class,"index"])->name("ventas.index");

Route::get("/tp3",[TP3Controller::class,"query"]);
#Route::get("/categIndex",[CategoriasController::class,"index"])->name("categ.index");
#Route::get("/autorIndex",[AutoresController::class,"index"])->name("autor.index");
//Route::get("(regLibro",[AutoresController::class,"index"])->name("libros.create");

Route::get("/autores",[AutoresController::class,"index"])->name("autores.index");
Route::get("/regAutor", [AutoresController::class, "create"])->name("autores.create");
Route::post("/cargAutor", [AutoresController::class, "store"])->name("autores.store");

