<?php

namespace App\Repositories;

use App\Models\Profile;
use App\Repositories\Contracts\ProfileRepositoryInterface;
use App\Utils\OaRepository;
use Illuminate\Support\Facades\DB;

class ProfileRepository implements ProfileRepositoryInterface
{
    public function store(
        array $profile
    ): Profile
    {
            $new_profile = new Profile;

            $new_profile->description = OaRepository::store($profile, 'description');
            $new_profile->contact_id = OaRepository::store($profile, 'contact_id');

            $new_profile->save();

            return $new_profile;
    }
}
