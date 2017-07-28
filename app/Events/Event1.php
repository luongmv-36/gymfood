<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Event1
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $a;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($e)
    {
        $this->a = $e;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
}
