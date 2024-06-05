<?php

namespace App\Providers;

use App\Events\ContactCreated;
use App\Listeners\SendContactCreatedListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as EventProvider;

class EventServiceProvider extends EventProvider
{
    protected $listen = [
        ContactCreated::class => [
            SendContactCreatedListener::class
        ]
    ];
}
