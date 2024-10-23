<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormCliente extends Component
{
    public $method;
    public $action;
    public $cliente;

    public function __construct($method = 'POST', $action="", $cliente=null)
    {
        $this->method = $method;
        $this->action = $action;
        $this->cliente = $cliente;
    }

    public function render(): View|Closure|string
    {
        return view('components.form-cliente');
    }
}
