<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
 
class autoresform extends Component
{
    public $m;

    public function __construct($m='POST')
    {
        $this->m = $m;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.autores-form');
    }
}
