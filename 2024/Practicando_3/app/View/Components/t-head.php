<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class thead extends Component
{
    
    public $T;
    
    public function __construct($T)
    {
        $this->T=$T;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.t-head');
    }
}
