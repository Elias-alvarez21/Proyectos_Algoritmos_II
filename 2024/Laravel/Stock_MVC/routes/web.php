<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProductController, MovementController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::patch('/products/{id}', [ProductController::class, 'state'])->name('products.state');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/movements/{id}', [MovementController::class, 'index'])->name('movements.index');
Route::post('/movements', [MovementController::class, 'store'])->name('movements.store');
Route::delete('/movements/{id}', [MovementController::class, 'destroy'])->name('movements.destroy');

