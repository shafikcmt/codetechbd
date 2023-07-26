<?php

namespace App\Repositories;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
class ContactRepository extends Repository
{
    public function model()
    {
        Contact::class;

    }
    public function storeByRequest(ContactRequest $request){
        Contact::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'message'=> $request->message,
        ]);

    }
}
