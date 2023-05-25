<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogSuccessfulLogin
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
    public function handle(Login $event): void
    {
        // Log::info('Login successful: ', [
        //     'user_id' => $event->user->getAuthIdentifier(),
        //     'ip' => request()->ip(),
        //     'user_agent' => request()->userAgent(),
        // ]);
    }
}
