<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class autoresrow extends Component
{
    public $autor;

    public function __construct($autor)
    {
        $this->autor=$autor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.autores-row');
    }
}
