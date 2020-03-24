<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CountUnreadAdminMessages implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
   public $count;
   public $name;
   public $surname;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($count,$name,$surname)
    {
      $this->count = $count;
      $this->name = $name;
      $this->surname = $surname;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
     public function broadcastOn()
   {
       return ['my-messages-count'];
   }

   public function broadcastAs()
   {
       return 'my-count';
   }
}
