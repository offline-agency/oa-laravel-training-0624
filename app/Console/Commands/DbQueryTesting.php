<?php

namespace App\Console\Commands;

use App\Models\Contact;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DbQueryTesting extends command

{
    protected $signature = 'db:join';
    protected $description = 'db join query';

    public function handle(){

        $results = Contact::first()->profile;

    dd($results);

}
}
