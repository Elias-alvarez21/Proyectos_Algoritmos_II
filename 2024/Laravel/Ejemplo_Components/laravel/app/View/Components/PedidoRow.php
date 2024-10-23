<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PedidoRow extends Component
{
    public $pedido;

    public function __construct($pedido)
    {
        $this->pedido = $pedido;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pedido-row');
    }
}
