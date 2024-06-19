<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DbQueryTesting extends command

{
    protected $signature = 'db:join';
    protected $description = 'db join query';

    public function handle(){

        $results = User::first()->profile;

    dd($results);

}
}
