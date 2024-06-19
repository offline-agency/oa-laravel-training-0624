<?php

namespace App\Console\Commands;

use App\Models\Contact;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Psr\SimpleCache\InvalidArgumentException;

class LaravelTraining extends Command
{
    protected $signature = 'run:functionality_tests';

    protected $description = 'Command description';

    public function handle()
    {
        config('app.env');
    }
}
