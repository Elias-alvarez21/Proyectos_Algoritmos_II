<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputForm extends Component
{
    public $leyenda;
    public $tipo;
    public $nombre;
    public $pedido;
    public $id; 

    public function __construct($leyenda, $tipo, $nombre, $id = null)
    {
        $this->leyenda = $leyenda;
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->id = $id;
    }

    public function render(): View|Closure|string
    {
        return view('components.input-form');
    }
}
