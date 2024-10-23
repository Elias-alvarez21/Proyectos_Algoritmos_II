<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class forminput extends Component
{

    public $n;//name
    public $t;//type
    public $l;//label

    public function __construct($n,$t,$l)
    {
        $this->n = $n;
        $this->t = $t;
        $this->l = $l;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-input');
    }
}
