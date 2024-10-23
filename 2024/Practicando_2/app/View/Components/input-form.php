<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class inputform extends Component
{
    
    public $name;
    public $type;
    public $value;
    public $leyenda;
    
    public function __construct($name, $type,$leyenda,$value=0)
    {
        $this->name = $name;
        $this->type = $type;
        $this->leyenda = $leyenda;
        $this->value = $value;
    }

    /**
     * Handle the action of the component.
     */

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-form');
    }
}
