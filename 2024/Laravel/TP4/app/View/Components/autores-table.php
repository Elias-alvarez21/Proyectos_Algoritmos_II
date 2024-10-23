<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class autorestable extends Component
{
    public $autores;

    public function __construct($autores)
    {
        $this->autores = $autores;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.autores-table');
    }
}
