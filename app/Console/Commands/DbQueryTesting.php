<?php

namespace App\Console\Commands;

use App\Models\Contact;
use Illuminate\Console\Command;

class DbQueryTesting extends command
{
    protected $signature = 'db:join';

    protected $description = 'db join query';

    public function handle()
    {
        $contact = Contact::with([
            'profile'
        ])->where('id', 1)->first();

        dd($contact->toArray());
    }
}
