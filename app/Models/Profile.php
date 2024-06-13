<?php

namespace App\Models;

use App\Traits\Relationships\ProfileRelationships;
use Illuminate\Database\Eloquent\Builder;

/**
 *
 * @mixin Builder
 *
 * Plain Fields
 *
 * @property int $id
 * @property string $description
 * @property string $user_id
 *
 * Relationships
 * @property Users $users
 */
class Profile extends OaModel
{
    protected $connection = 'oa_laravel_training_two';

    use ProfileRelationships;

    protected $table = 'profiles';

}
