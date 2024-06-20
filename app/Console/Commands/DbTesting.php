<?php

namespace App\Console\Commands;

use App\Repositories\Contracts\ContactRepositoryInterface;
use Illuminate\Console\Command;
use App\Repositories\Contracts\ProfileRepositoryInterface;

class DbTesting extends command
{

    protected $signature = 'db:fill';
    protected $description = 'fill db';

    protected ProfileRepositoryInterface $profileRepository;
    protected ContactRepositoryInterface $contactRepository;

    public function handle(
        ContactRepositoryInterface   $contactRepository,
        ProfileRepositoryInterface $profileRepository
    )
    {
        $this->contactRepository = $contactRepository;
        $this->profileRepository = $profileRepository;

        $db_contact = $this->contactRepository->store([
            'name' => 'jhon',
            'surname' => 'doe',
            'address' => '123 roma centro'
        ]);
        $contact_id = $db_contact->id;

        $db_profile = $this->profileRepository->store([
            'description' => 'vive a roma e si chiama jhon doe',
            'contact_id' => $contact_id,
        ]);
    }
}
