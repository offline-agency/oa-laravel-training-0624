<?php

namespace App\Repositories;

use App\Models\Users;
use App\Repositories\Contracts\UsersRepositoryInterface;
use App\Utils\OaRepository;

class UsersRepository implements  UsersRepositoryInterface
{

    public function store(
        array $user
    ): Users
    {
        $new_user = new Users;

        $new_user ->name = OaRepository::store($user, 'name');
        $new_user ->surname = OaRepository::store($user, 'surname');
        $new_user ->address = OaRepository::store($user, 'address');

        $new_user->save();

        return $new_user;
    }

}
