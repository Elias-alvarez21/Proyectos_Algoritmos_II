<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class container extends Component
{
    public $m;
    public $a;
    public $areas;
    public function __construct($m, $a, $areas)
    {
        $this->m = $m;
        $this->a = $a;
        $this->areas = $areas;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.container');
    }
}
