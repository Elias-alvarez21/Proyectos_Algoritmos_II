<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class inputform extends Component
{
    
    public $type;
    public $name;
    public $leyenda;
    public $label;
    public $value;

    public function __construct($type,$name,$leyenda,$label,$value=0)
    {
        
        $this->type=$type;
        $this->name=$name;
        $this->leyenda=$leyenda;
        $this->label=$label;
        $this->value=$value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-form');
    }
}
