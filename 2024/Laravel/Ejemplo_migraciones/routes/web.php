<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ClienteController, PedidoController};

Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
