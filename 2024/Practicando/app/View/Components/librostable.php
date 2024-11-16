<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class librostable extends Component
{
    public $array;
    // public $Tabla;
    public $tipo;
    public function __construct($array,$tipo)
    {
        $this->array=$array;
        // $this->Tabla=$Tabla;
        $this->tipo=$tipo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.libros-table');
    }
}
