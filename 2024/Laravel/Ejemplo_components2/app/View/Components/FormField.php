<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormField extends Component
{
    
    public $type;
    public $label;
    public $name;
    public $value;
    
    public function __construct($type, $label, $name, $value)
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
    }

    public function render(): View|Closure|string
    {
        return view('components.form-field');
    }
}
