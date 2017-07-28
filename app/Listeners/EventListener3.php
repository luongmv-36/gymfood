<?php

namespace App\Listeners;

use App\Events\Event2;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListener3
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Event2  $event
     * @return void
     */
    public function handle(Event2 $event)
    {
        $r = $event->t;
    }
}
