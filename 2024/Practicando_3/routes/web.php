<?php

use Illuminate\Support\Facades\Route;
use app\Http\Models\TareasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/",[TareasController::class,"index"])->name("tareas.index");