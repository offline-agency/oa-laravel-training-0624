<?php

namespace App\Repositories;

use App\Models\Contact;
use App\Repositories\Contracts\ContactRepositoryInterface;
use App\Utils\OaRepository;

class ContactRepository implements  ContactRepositoryInterface
{

    public function store(
        array $contact
    ): Contact
    {
        $new_contact = new Contact;

        $new_contact ->name = OaRepository::store($contact, 'name');
        $new_contact ->surname = OaRepository::store($contact, 'surname');
        $new_contact ->address = OaRepository::store($contact, 'address');

        $new_contact->save();

        return $new_contact;
    }

}
