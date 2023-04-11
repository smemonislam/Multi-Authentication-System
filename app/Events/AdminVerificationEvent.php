<?php

namespace App\Events;

use App\Models\Admin;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AdminVerificationEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $admin;
    /**
     * Create a new event instance.
     */
    public function __construct($admin)
    {
        $this->admin = $admin;
    }


}
