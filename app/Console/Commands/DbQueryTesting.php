<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DbQueryTesting extends command

{
    protected $signature = 'db:join';
    protected $description = 'db join query';

    public function handle(){


    $results = DB::table('oa_laravel_training_one.users as u')
        ->join('oa_laravel_training_two.profiles as p', 'u.id', '=', 'p.user_id')
        ->select('p.*', 'u.*')
        ->get();

    dd($results);

}
}
