<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class EmailSentListener
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
    public function handle(\Illuminate\Mail\Events\MessageSent $event): void
    {
        Log::channel('stderr')->info('Email sent', [
            'event' => $event,
            'sent' => $event->sent,
            'data' => $event->data,
        ]);
    }
}
