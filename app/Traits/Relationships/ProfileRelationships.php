<?php

namespace App\Traits\Relationships;

use App\Models\Users;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait ProfileRelationships
{
    public function profile(): HasOne
    {
        return $this->hasOne(Users::class);
    }
}
