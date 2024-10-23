<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class selectform extends Component
{

    public $name;
    public $leyenda;
    public $options;

    public function __construct($name,$leyenda,$options)
    {
        $this->name = $name;
        $this->leyenda = $leyenda;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-form');
    }
}
