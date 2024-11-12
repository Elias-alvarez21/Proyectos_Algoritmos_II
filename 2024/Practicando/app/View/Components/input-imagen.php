<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class inputimagen extends Component
{

    public $tipo;
    public $leyenda;
    public $nombre;

    public function __construct($tipo, $leyenda,$nombre)
    {
        $this->tipo=$tipo;
        $this->leyenda=$leyenda;
        $this->nombre=$nombre;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-imagen');
    }
}
