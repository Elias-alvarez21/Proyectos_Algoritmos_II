<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class THead extends Component
{
    public $pers;

    public function __construct($pers)
    {
        $this->pers=$pers;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.t-head');
    }
}
