<?php

namespace App\Listeners;

use App\Events\ContactCreated;
use App\Models\User;

class SendContactCreatedListener
{
    public function __construct()
    {
        //
    }

    public function handle(ContactCreated $event): void
    {
        $user = new User();
        $user->email = $event->getContactCreatedId();

        //TODO: notify user
    }
}
