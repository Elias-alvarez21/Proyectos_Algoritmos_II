<?php

use Illuminate\Support\Facades\{Route, Auth};
use App\Http\Controllers\{TestController, FileController};

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Auth::routes();
Route::get('/test', [TestController::class, 'Test'])->name('test');
Route::get('/privada', [TestController::class, 'Privated'])->name('privated');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Esta vista está desprotegida

Route::get('/demo', [TestController::class, 'demo'])->name('demo.index');

//CRUD ↓
Route::get('/files', [FileController::class, 'index'])->name('file.index');
Route::post('/files', [FileController::class, 'store'])->name('file.store');
Route::get('/projector/{path}', [FileController::class, 'show'])->name('file.show');
Route::get('/file/{path}', [FileController::class, 'image'])->name('image.show');
Route::delete('/file/{path}', [FileController::class, 'destroy'])->name('image.destroy');

