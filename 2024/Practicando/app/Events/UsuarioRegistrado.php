<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UsuarioRegistrado
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $usuario;

    public function __construct($usuario)
    {
        $this->usuario=$usuario;
    }

}
