<?php

namespace App\Repositories\Contracts;

use App\Models\Profile;

interface ProfileRepositoryInterface
{
    public function store(
        array $profile
    ): Profile;

}
