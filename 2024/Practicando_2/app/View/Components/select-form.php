<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class selectform extends Component
{
    public $name;
    public $options;
    public $leyenda;

    public function __construct($name,$options,$leyenda)
    {
        $this->name = $name;
        $this->options = $options;
        $this->leyenda = $leyenda;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-form');
    }
}
