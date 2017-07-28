<?php

namespace App\Listeners;

use App\Events\Event1;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListener1
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
     * @param  Event1  $event
     * @return void
     */
    public function handle(Event1 $event)
    {
        $b = $event->a;
    }
}
