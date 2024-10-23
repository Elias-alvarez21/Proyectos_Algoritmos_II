<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class containerform extends Component
{
    public $m;
    public $a;
    public $optionsAutos;
    public $optionsClientes;
    public $editVenta;//array de datos para actualizar

    public function __construct($m,$a,$optionsAutos,$optionsClientes,$editVenta=null)
    {
        $this->m=$m;
        $this->a=$a;
        $this->optionsAutos=$optionsAutos;
        $this->optionsClientes=$optionsClientes;
        $this->editVenta=$editVenta;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.container-form');
    }
}
