<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Date;

class NoftifyAdmins implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $admin;

    public $object_type;

    public $object_id;

    public function __construct($message, $admin, $object_type, $object_id)
    {
        $this->message = $message;
        $this->admin = $admin;
        $this->object_id = $object_id;
        $this->object_type = $object_type;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PresenceChannel('admin-notfication'),
        ];
    }
    public function broadcastAs()
    {
        return 'admin-notfication-event';
    }
    public function broadcastWith()
    {
        return [
            'message' => $this->message,
            'object_type' => $this->object_type,
            'object_id' => $this->object_id,
            'admin' => $this->admin,
            'createdAt' => Date::now()
        ];
    }
}
