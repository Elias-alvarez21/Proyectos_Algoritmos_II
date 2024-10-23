<?php

use Illuminate\Support\Facades\{Route,Auth};
use App\Http\Controllers\{AuthController,HomeController};

Route::get('/', function () {
    return view('welcome');
})->middleware("auth");

Auth::routes();
Route::get('/test', [AuthController::class, 'Test'])->name('test');
Route::get('/privada', [TestController::class, 'Privated'])->name('privated');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
