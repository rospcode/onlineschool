<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PusherMessages implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
     public $message;
     public $from;
     public $to;
     public $date;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($from,$to,$message,$date)
    {
         $this->from = $from;
         $this->to = $to;
         $this->message = $message;
         $this->date = $date;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
     public function broadcastOn()
   {
       return ['my-channel'];
   }

   public function broadcastAs()
   {
       return 'my-event';
   }
}
