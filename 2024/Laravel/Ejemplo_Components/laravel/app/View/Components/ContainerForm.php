<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContainerForm extends Component
{
    public $method;
    public $action;
    public $id;

    public function __construct($action, $method, $id)
    {
        $this->action = $action;
        $this->method = $method;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.container-form');
    }
}
