<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class librosrow extends Component
{
    public $libro;

   public function __construct($libro)
    {
        $this->libro=$libro;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.libros-row');
    }
}
