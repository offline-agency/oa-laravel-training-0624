<?php

namespace App\Repositories\Contracts;

use App\Models\Users;

interface UsersRepositoryInterface
{
    public function store(
        array $user
    ): Users;

}
