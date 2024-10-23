<?php
use App\Http\Controllers\{AutosController,VentasController,ClientesController};
use Illuminate\Support\Facades\{Route,Auth};

Route::get("/",function(){
    return view("welcome");
})->middleware("auth");

Route::get("/ventas",[VentasController::class,"index"])->name("ventas.index")/*->middleware(["Lectura","Admin"])*/;

Route::get("/ventas/create", [VentasController::class, "create"])->name("ventas.create")->middleware(["Usuario","Admin"]);
Route::post("/nuevaVenta",[VentasController::class,"store"])->name("ventas.store")->middleware(["Usuario","Admin"]);

Route::get("/editarVenta/{id}",[VentasController::class, "edit"])->name("ventas.edit")/*->middleware("auth")*/;
Route::put("/actualizarVenta/{id}",[VentasController::class,"update"])->name("ventas.update")->middleware("auth");

Route::delete("/EliminarVenta/{id}", [VentasController::class, "destroy"])->name("ventas.delete")->middleware("Admin");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//VISTAS SIMPLES---------------------

Route::get("/registrarAuto",[AutosController::class,"create"])->name("auto.create")->middleware("Admin");
Route::post("/autoCargado",[AutosController::class,"store"])->name("auto.store")->middleware("Admin");

Route::get("/autos",[AutosController::class,"index"])->name("auto.index");

Route::delete("/eliminar/auto{id}",[AutosController::class,"destroy"])->name("autos.delete");