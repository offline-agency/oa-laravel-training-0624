<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ContactRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ContactsController extends Controller
{
    protected ContactRepositoryInterface $contactRepository;

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function list()
    {
        return view('contact.list', [
            'contacts' => [
                [
                    'id' => 1,
                    'name' => 'Nicolas',
                    'message' => 'Hello world!'
                ],
                [
                    'id' => 1,
                    'name' => 'Giacomo',
                    'message' => 'I am the speaker'
                ],
            ]
        ]);
    }
}
