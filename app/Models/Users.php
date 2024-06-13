<?php

namespace App\Models;

use App\Traits\Relationships\UsersRelationships;
use Illuminate\Database\Eloquent\Builder;


/**
 *
 * @mixin Builder
 *
 * Plain Fields
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $address
 *
 * Relationships
 * @property Profile $profiles
 */
class Users extends OaModel
{
    protected $connection = 'oa_laravel_training_one';

    use UsersRelationships;

    protected $table = 'users';
}
