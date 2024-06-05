<?php

namespace App\Repositories;

use App\Models\Contact;
use App\Repositories\Contracts\ContactRepositoryInterface;
use Illuminate\Support\Arr;

class ContactRepository implements ContactRepositoryInterface
{
    public function store(
        array $contact
    )
    {
        $new_contact = new Contact();

        $new_contact->name = Arr::get($contact, 'name');
        $new_contact->surname = Arr::get($contact, 'surname');
        $new_contact->email = Arr::get($contact, 'email');
        $new_contact->message = Arr::get($contact, 'message');
        $new_contact->status = Arr::get($contact, 'status');

        return $new_contact->save();
    }

    public function update(
        int $contact_id,
        array $contact
    )
    {
        $db_contact = Contact::find($contact_id);

        $new_contact = new Contact();

        $new_contact->name = Arr::has($contact, 'name') ? Arr::get($contact, 'name') : $db_contact->name;
        $new_contact->surname = Arr::has($contact, 'surname') ? Arr::get($contact, 'surname') : $db_contact->name;
        $new_contact->email = Arr::has($contact, 'email') ? Arr::get($contact, 'email') : $db_contact->name;
        $new_contact->message = Arr::has($contact, 'message') ? Arr::get($contact, 'message') : $db_contact->name;
        $new_contact->status = Arr::has($contact, 'status') ? Arr::get($contact, 'status') : $db_contact->name;

        return $new_contact->save();
    }
}
