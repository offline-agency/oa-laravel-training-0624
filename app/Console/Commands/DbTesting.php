<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\Contracts\UsersRepositoryInterface;
use App\Repositories\Contracts\ProfileRepositoryInterface;

class DbTesting extends command
{

    protected $signature = 'db:fill';
    protected $description = 'fill db';

    protected ProfileRepositoryInterface $profileRepository;
    protected UsersRepositoryInterface $usersRepository;

    public function handle(
        UsersRepositoryInterface   $usersRepository,
        ProfileRepositoryInterface $profileRepository
    )
    {
        $this->usersRepository = $usersRepository;
        $this->profileRepository = $profileRepository;

        $db_user = $this->usersRepository->store([
            'name' => 'jhon',
            'surname' => 'doe',
            'address' => '123 roma centro'
        ]);
        $user_id = $db_user->id;

        $db_profile = $this->profileRepository->store([
            'description' => 'vive a roma e si chiama jhon doe',
            'user_id' => $user_id,
        ]);
    }
}
