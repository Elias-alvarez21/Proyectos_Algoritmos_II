<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AutoresController,CategoriasController,LibrosController,VentasController,TP3Controller,FilesController};
use Symfony\Component\HttpKernel\HttpCache\Esi;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(LibrosController::class)->name("libros.")->group(function () {
    Route::get('/', 'index')->name("index");
    Route::get('/regLibro', 'create')->name("create");
    Route::post('/cargLibro', 'storeImg')->name("store");
    Route::get("/editLibro/{id}","edit")->name("edit");
    Route::put("/editLIbro/update{id}","update")->name("update");
    Route::delete("/elimLibro{id}","destroy")->name("delete");
});
Route::prefix('ventas')->controller(VentasController::class)->name('ventas.')->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/libro/{id}', 'show')->name('show');
});

Route::get("/tp3",[TP3Controller::class,"query"]);
Route::get("/autores","AutoresController@index")->name("autores.index");
Route::get("/subirArchivo",[FilesController::class,"index"])->name("files.index");


//RUTAS SIMPLES
    // Route::get("/",[LibrosController::class,"index"])->name("libros.index");

    // Route::get("/regLibro",[LibrosController::class,"create"])->name("libros.create");
    // Route::post("/cargLibro",[LibrosController::class,"storeImg"])->name("libros.store");

    // Route::get("/editLibro/{id}",[LibrosController::class,"edit"])->name("libros.edit");
    // Route::put("/editLIbro/update{id}",[LibrosController::class,"update"])->name("libros.update");

    // Route::delete("/elimLibro{id}",[LibrosController::class,"destroy"])->name("libros.delete");
    // Route::get("/ventas",[VentasController::class,"index"])->name("ventas.index");
    // Route::get("/ventLibro{id}",[VentasController::class,"show"])->name("ventas.show");

    #Route::get("/categIndex",[CategoriasController::class,"index"])->name("categ.index");
    #Route::get("/autorIndex",[AutoresController::class,"index"])->name("autor.index");
    //Route::get("(regLibro",[AutoresController::class,"index"])->name("libros.create");


