<?php

namespace App\Repositories\Contracts;

use App\Models\Contact;

interface ContactRepositoryInterface
{
    public function store(
        array $contact
    ): Contact;

}
