<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ClienteController, PedidoController};

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/pedidos/{id}', [PedidoController::class, 'create'])->name('pedido.create');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedido.store');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');