<?php

namespace App\Repositories\Contracts;

interface ContactRepositoryInterface
{
    public function store(
        array $contact
    );

    public function update(
        int $contact_id,
        array $contact
    );
}
