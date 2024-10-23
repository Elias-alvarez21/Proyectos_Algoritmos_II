<?php

use Illuminate\Support\Facades\{Route, Auth};
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Auth::routes();
Route::get('/test', [TestController::class, 'Test'])->name('test');
Route::get('/privada', [TestController::class, 'Privated'])->name('privated');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
