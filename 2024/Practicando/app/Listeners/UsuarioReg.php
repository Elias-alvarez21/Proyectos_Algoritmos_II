<?php

namespace App\Listeners;

use App\Events\UsuarioRegistrado;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\{Log, Mail};
use App\Mail\BienvenidoUsuario;

class UsuarioReg
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UsuarioRegistrado $event): void
    {
        Log::info("USUARIO REGISTRADO {$event->usuario->name} {$event->usuario->email}");
        Mail::to($event->usuario->email)->send(new BienvenidoUsuario($event->usuario));
    }
}
