<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Event;
use App\Domain\Order\Events\UsuarioRegistrado;
use App\Domain\Order\Listeners\UsuarioReg;

class EventServiceProvider extends ServiceProvider
{
    
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(
            UsuarioRegistrado::class,
            UsuarioReg::class,
        );
    }
}
