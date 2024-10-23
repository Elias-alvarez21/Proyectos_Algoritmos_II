<?php

use Illuminate\Support\Facades\{Route,Auth};
use App\Http\Controllers\{AutoresController,CategoriasController,LibrosController,VentasController,TP3Controller,AdminUSerController,HomeController,FilesController};
use Symfony\Component\HttpKernel\HttpCache\Esi;

Route::get('/', function () {
    return view('welcome');
})->middleware("auth");

Auth::routes();

Route::get("/libros",[LibrosController::class,"index"])->name("libros.index")->middleware("auth");
Route::get("/regLibro",[LibrosController::class,"create"])->name("libros.create")->middleware("auth");
Route::post("/cargLibro",[LibrosController::class,"store"])->name("libros.store")->middleware("auth");
#Route::get("/editLibro/{id}",[LibrosController::class,"edit"])->name("libros.edit");
#Route::get("/editLIbro/update",[LibrosController::class,"update"])->name("libros.update");
Route::get("/elimLibro{id}",[LibrosController::class,"destroy"])->name("libros.delete")->middleware("auth");
Route::get("/ventLibro{id}",[VentasController::class,"index"])->name("ventas.index")->middleware("auth");

Route::get("/tp3",[TP3Controller::class,"query"])->middleware("auth");
#Route::get("/categIndex",[CategoriasController::class,"index"])->name("categ.index");
#Route::get("/autorIndex",[AutoresController::class,"index"])->name("autor.index");
//Route::get("(regLibro",[AutoresController::class,"index"])->name("libros.create");

Auth::routes();
Route::get("/home",[HomeController::class, "index"])->name("home");
Route::get('/Editor',[AdminUSerController::class, "User"])->name('Editores');

Route::get("/archivo",[LibrosController::class, "store"])->name("archivos.index");
Route::get("/archivo/{imagen}",[LibrosController::class, "show"])->name("vistazo.imagen");
Route::get("/busquedaImagen/{imagen}",[LibrosController::class,"busqueda"])->name("busqueda.imagen");


