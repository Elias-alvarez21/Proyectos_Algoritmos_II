<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputForm extends Component
{
    public $leyenda;
    public $tipo;
    public $name;
    public $value;
    public $id;
    public function __construct($leyenda, $tipo, $name,$value,$id=null)
    {
        $this->leyenda = $leyenda;
        $this->tipo = $tipo;
        $this->name = $name;
        $this->value=$value;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-form');
    }
}
