<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tbody extends Component
{
    
    public $p;

    public function __construct($p)
    {
        $this->p=$p;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.t-body');
    }
}
