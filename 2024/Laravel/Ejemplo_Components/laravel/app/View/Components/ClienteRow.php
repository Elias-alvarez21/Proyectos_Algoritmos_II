<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClienteRow extends Component
{
    public $cliente;

    public function __construct($cliente)
    {
        $this->cliente = $cliente;
    }

     public function render(): View|Closure|string
    {
        return view('components.cliente-row');
    }
}
