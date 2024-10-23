<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class librostable extends Component
{
    public $libros;
    
    public function __construct($libros)
    {
        $this->libros=$libros;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.libros-table');
    }
}
