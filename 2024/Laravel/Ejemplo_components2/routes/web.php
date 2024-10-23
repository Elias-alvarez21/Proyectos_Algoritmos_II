<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ClienteController, PedidoController};

/*Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/pedidos/{id}', [PedidoController::class, 'create'])->name('pedido.create');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedido.store');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');*/


Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/cliente/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');