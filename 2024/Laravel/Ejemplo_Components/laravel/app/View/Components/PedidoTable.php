<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PedidoTable extends Component
{
    public $pedidos;

    public function __construct($pedidos)
    {
        $this->pedidos = $pedidos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pedido-table');
    }
}
