<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectForm extends Component
{
    public $leyenda;
    public $name;
    public $options;
    public $option;

    public function __construct($leyenda, $name, $options,$option)
    {
        $this->leyenda = $leyenda;
        $this->name = $name;
        $this->options = $options;
        $this->option=$option;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-form');
    }
}
