<?php

namespace App\Models;

use App\Traits\Relationships\ContactsRelationships;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


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
class Contact extends Model
{
    protected $connection = 'oa_laravel_training_one';

    use ContactsRelationships;
}
