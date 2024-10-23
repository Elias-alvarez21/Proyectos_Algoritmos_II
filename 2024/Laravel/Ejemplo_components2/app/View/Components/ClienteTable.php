<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClienteTable extends Component
{
   
    public $clientes;

    public function __construct($clientes)
    {
        $this->clientes = $clientes;
    }

    public function render(): View|Closure|string
    {
        return view('components.cliente-table');
    }
}
