<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserRegistered;
use App\Mail\WelcomeUser;
use Illuminate\Support\Facades\Mail;

class SendEmail
{
    public function __construct() { }

   
    public function handle(UserRegistered $event): void
    {
        Mail::to($event->user->email)->send(new WelcomeUser($event->user));
    }
}
