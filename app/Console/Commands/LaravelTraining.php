<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Session;

class LaravelTraining extends Command
{
    protected $signature = 'run:functionality_tests';

    protected $description = 'Command description';

    public function handle()
    {
        Session::put('giacomo', 'ciao');

        if (Session::has('giacomo')) {
            $this->info('Key "giacomo" has been saved in Redis.');
        } else {
            $this->error('Failed to save key "giacomo" in Redis.');
        }

        dd(Session::get('giacomo'));
    }
}
