<?php

namespace App\Traits\Relationships;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait ContactsRelationships
{
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }
}
