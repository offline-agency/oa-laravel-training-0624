<?php

namespace App\Traits\Relationships;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait ProfileRelationships
{
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
