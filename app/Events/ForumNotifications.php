<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ForumNotifications implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $notification;
    public $from;
    public $date;

    public function __construct($notification,$from,$date)
    {
        $this->notification = $notification;
        $this->from = $from;
        $this->date = $date;
    }


     public function broadcastOn()
     {
         return ['forum-notification'];
     }

     public function broadcastAs()
     {
         return 'my-forum-notification';
     }
}
