<?php

namespace App\Models;

use App\Traits\Relationships\ProfileRelationships;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

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
 * @property User $user
 */
class Profile extends Model
{
    protected $connection = 'oa_laravel_training_two';

    use ProfileRelationships;

}
