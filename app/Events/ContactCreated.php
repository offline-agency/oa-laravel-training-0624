<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\Queue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContactCreated implements ShouldQueue
{
    use Dispatchable,
        InteractsWithSockets,
        SerializesModels;

    public int $contact_created_id;

    public function __construct(
        int $contact_created_id
    )
    {
        $this->setContactCreatedId($contact_created_id);
    }

    public function getContactCreatedId(): int
    {
        return $this->contact_created_id;
    }

    public function setContactCreatedId(int $contact_created_id): void
    {
        $this->contact_created_id = $contact_created_id;
    }
}
