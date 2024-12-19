<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tbody extends Component
{
    
    public $tar;
    public function __construct($tar)
    {
        $this->tar=$tar;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.t-body');
    }
}
