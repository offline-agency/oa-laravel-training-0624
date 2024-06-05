<?php

namespace Database\Seeders;

use App\Repositories\Contracts\ContactRepositoryInterface;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    protected ContactRepositoryInterface $contactRepository;

    public function __construct(
        ContactRepositoryInterface $contactRepository
    )
    {
        $this->contactRepository = $contactRepository;
    }

    public function run(): void
    {
        $this->contactRepository->store([
            'name' => 'Nicolas',
            'surname' => 'Sanavia',
            'email' => 'nicolas@offlineagency.it',
            'message' => 'Hello',
            'status' => 'new'
        ]);
    }
}
