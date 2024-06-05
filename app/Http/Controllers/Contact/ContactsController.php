<?php

namespace App\Http\Controllers\Contact;

use App\Events\ContactCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use App\Repositories\Contracts\ContactRepositoryInterface;
use Exception;
use Illuminate\Http\JsonResponse;

class ContactsController extends Controller
{
    protected ContactRepositoryInterface $contactRepository;

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function list(): JsonResponse
    {
        try {
            $contacts = Contact::all();

            return response()->json([
                'message' => 'Contacts loaded successfully',
                'contacts' => $contacts
            ]);
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'contacts' => []
            ], 400);
        }
    }

    public function store(
        ContactStoreRequest $request
    ): JsonResponse
    {
        $new_contact = $this->contactRepository->store([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'status' => $request->input('status')
        ]);

        event(new ContactCreated(
            $new_contact->id
        ));

        return response()->json([
            'message' => 'Contact created successfully',
            'new_contact' => $new_contact
        ]);
    }
}
