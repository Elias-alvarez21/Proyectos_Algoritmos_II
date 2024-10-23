<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Http\Request;

class ContainerForm extends Component
{

    public $m;
    public $a;
    public $autores;//para la foranea que se necesita para crear un libro
    public $id;
    public function __construct($m,$a,$autores,$id)
    {
        $this->m = $m;//method
        $this->a = $a;//action
        $this->autores=$autores;
        $this->id=$id;//el input hidden en el caso de actualizar
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.container-form');
    }
}
