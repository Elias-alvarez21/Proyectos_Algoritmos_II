<?php

use Illuminate\Support\Facades\{Route, Auth};
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');//si esta autentificado pasa si no lo esta no 

Auth::routes();// es una forma rápida de definir todas las rutas necesarias para la autenticación de usuarios
Route::get('/test', [TestController::class, 'Test'])->name('test');
Route::get('/privada', [TestController::class, 'Privated'])->name('privated');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
