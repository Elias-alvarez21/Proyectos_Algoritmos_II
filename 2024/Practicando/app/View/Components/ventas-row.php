<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ventasrow extends Component
{

    public $a;

    public function __construct($a)
    {
        $this->a=$a;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ventas-row');
    }
}
