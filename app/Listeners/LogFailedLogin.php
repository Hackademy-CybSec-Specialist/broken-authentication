<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Failed;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogFailedLogin
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
    public function handle(Failed $event): void
    {
        // Log::warning('Login failed: ', [
        //     'user_id' => $event->user ? $event->user->getAuthIdentifier() : null,
        //     'credentials' => $event->credentials,
        //     'ip' => request()->ip(),
        //     'user_agent' => request()->userAgent(),
        // ]);
    }
}
