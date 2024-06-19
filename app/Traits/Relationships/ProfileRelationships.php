<?php

namespace App\Traits\Relationships;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait ProfileRelationships
{
    public function users_profiles(): HasOne
    {
        return $this->hasOne(Contact::class);
    }
}
